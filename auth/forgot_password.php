<?php

include "./config/db.php";

session_start();
$errors = array("email" => "");
$email = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["v_submit"]) ) {
    $email = htmlspecialchars($_POST["email"]);

    if (empty($email)){
        $errors["email"] = "insert an email";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Input a valid email";
    }
    //select to know if email exist
    $select = $conn -> prepare("SELECT * FROM users WHERE email = ?");
    $select -> bind_param("s", $email);
    $select -> execute();
    $select -> store_result();
    if ($select -> num_rows() == 1){ //if row with email == 1 then continue
        $otp = random_int(100000, 999999); // generate otp code
        $otp_exp = date("Y-m-d H:i:s", time() + 300); //this gives us 300 seconds =  5 minutes
        // set the values in db to be with the variables you have
        $update = $conn -> prepare("UPDATE users set otp = ?, otp_expires_at = ? WHERE email = ?");
        $update -> bind_param("sss", $otp, $otp_exp, $email);
        $update -> execute();

        // FROM HERE IT SENDS THE MAIL/ RANDOMIZED OTP TO THE ENTERED EMAIL
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

            $mail -> setFrom("outreach.coree@gmail.com", "Outreach reset"); //who they'll see sent an email
            $mail -> addAddress($email); //email receiving the otp
            $mail -> isHTML(true);
            $mail -> Subject = "Password-reset OTP verification";
            $mail->Body = "<p>Hello, {$_SESSION['username']}</p>
            <p>Your OTP is <strong>$otp</strong></p>
            <p>This will expire in 5 minutes. If you didn't request this, please ignore it.</p>";
            $mail -> send();
            
            header("Location: ./pemail-sent.php" );
        }
        catch (Exception $e) {
            $errors['email'] = "ERROR! Email didnt send" . $mail -> ErrorInfo ;
            // header("Location: ./pforgot_password.php ");
        }
        $select -> close();
        $conn -> close();
    }
    else {
        $errors["email"] = "This Email does not exist";
    }

}
