<?php
session_start();
include "./config/db.php";
$email = $pass = "";
$errors = array("email" => "", "pass" => "", "cpass" => "");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] === "POST"  &&   isset($_POST["t_submit"]) || isset($_POST["v_submit"]) ){
    // post entries from form
    $email = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["pass"]);
    $cpass = htmlspecialchars($_POST["pass"]);

    //validations
    if (empty($email)){
        $errors["email"] = "Enter an email";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Please enter a valid email";
    }
    if (empty($pass)){
        $errors["pass"] = "Enter a password";
    }
    elseif (strlen($pass) < 8 || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d\W_]+$/", $pass)){
        $errors["pass"] = "Your password must be <br>  ...More than eight characters <br> ...Must Contain bot uppercase and lowercase letters <br> ...Must contain numbers ";
    }
    if (empty($cpass)){
        $errors["cpass"] = "Enter a password";
    }
    elseif ($cpass !== $pass){
        $errors["cpass"] = "Passwords dont match";
    }

    $check_stmt = $conn->prepare("SELECT email from users WHERE email = ? ");
    $check_stmt -> bind_param("s", $email);
    $check_stmt -> execute();
    $check_stmt -> store_result();

    if ($check_stmt -> num_rows > 0){
        $errors["email"] = "Sorry the email already exist";
    }
    $check_stmt -> close();

    if (!array_filter($errors)){
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT); //hash password
        if (isset($_POST["t_submit"])){
            $stmt = $conn -> prepare("INSERT INTO users(role_id, name_tag, email, pass) VALUES(?,?,?,?) ");
            $role_id =2;
            $username = "Therapist". random_int(1000,9999);
            $stmt -> bind_param("isss", $role_id, $username, $email, $pass_hash );
            if ($stmt -> execute()){
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $email;
                $_SESSION["role"] = $role_id;
                $_SESSION["user_id"] = $conn -> insert_id;
    
                header("Location: ./questionnaire/question.php");
            }
        }
        else {
            $stmt = $conn -> prepare("INSERT INTO users(role_id, name_tag, email, pass) VALUES(?,?,?,?) ");
            $role_id =3;
            $username = "User". random_int(1000, 9999);
            $stmt -> bind_param("isss", $role_id, $username, $email, $pass_hash );
            if ($stmt -> execute()){
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $email;
                $_SESSION["role"] = $role_id;
                $_SESSION["user_id"] = $conn -> insert_id;
    
                header("location: ./home/victim.php");
            }
        }
        $mail = new PHPMailer(true);
        // put it in a try block
        try {
            //block for our info
            $mail  -> isSMTP();// what format we send the message
            $mail -> Host = "smtp.gmail.com" ;//shows the host is .gmail
            $mail -> SMTPAuth = true;
            $mail -> Username = "outreach.coree@gmail.com";
            $mail -> Password = "ogcqkzqppuzdgrus"; //gmail generated app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //tls orr ssl
            $mail -> Port = "465"; //port 465 for ssl

            $mail -> setFrom("outreach.coree@gmail.com", "Welcome to Outreach"); //who they'll see sent an email
            $mail -> addAddress($email); //email receiving the otp
            $mail -> isHTML(true);
            $mail -> Subject = "Sign up for out reach";
            $mail->Body = "<p>Hello, {$_SESSION['email']}</p>
            <p>You've just signed in to outreach. '<br>' Welcome to the community and get ready to see lives get changed</p>";
            $mail -> send();
        }
        catch (Exception $e) {
            $errors['email'] = "ERROR! Email didnt send" . $mail -> ErrorInfo ;
            // header("Location: ./pforgot_password.php ");
        }
        $stmt -> close();
        $conn -> close();
    }
}
?>