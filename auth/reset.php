<?php
include "./config/db.php";
session_start();

$errors = array("pass" => "", "cpass" => "");
$pass = $cpass = "";


// if (!isset($_SESSION["otp_verified_email"])) {
//     die("Unauthorized access. Please go through the forgot password process.");
// }

if ($_SERVER["REQUEST_METHOD"] === "POST"  &&   isset($_POST["t_submit"]) || isset($_POST["v_submit"]) ){
    $pass = htmlspecialchars($_POST["pass"]);
    $cpass = htmlspecialchars($_POST["cpass"]);

    //vaidations

    if (empty($pass)){
        $errors["pass"] = "Enter a password";
    }
    elseif (strlen($pass) < 8 || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d\W_]+$/", $pass)){
        $errors["pass"] = "Your password must be <br>  ...More than eight characters <br> ...Must Contain bot uppercase and lowercase letters <br> ...Must contain numbers ";
    }
    if (empty($cpass)){
        $errors["cpass"] = "Enter a password";
    }
    elseif (!$cpass == $pass){
        $errors["cpass"] = "Passwords dont match";
    }

    if (!array_filter($errors)){
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT); //hash password
        if (isset($_POST["t_submit"])){
            $stmt = $conn -> prepare("UPDATE users SET pass = ? WHERE email = ?");
            $role_id =2;
            $stmt -> bind_param("ss", $pass_hash, $mail );
            if ($stmt -> execute()){


                $_SESSION["role"] = $role_id;
                $_SESSION["user_id"] = $conn -> insert_id;
    
                header("location: ./home/therapist.php");
            }
        }
        else {
            $stmt = $conn -> prepare("UPDATE users SET pass = ? WHERE email = ?");
            $role_id = 3;
            $stmt -> bind_param("ss", $pass_hash, $mail );
            if ($stmt -> execute()){
                $_SESSION["role"] = $role_id;
                $_SESSION["user_id"] = $conn -> insert_id;
    
                header("location: ./home/victim.php");
            }
            
        }
        $stmt -> close();
        $conn -> close();
    }
}