<?php

include "./config/db.php";
session_start();
$errors = array("otp" => "");


$email = $_SESSION["email"];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["v_submit"]) ){

    $otp_array = array();

    if (isset($_POST["otp_num"]) && is_array($_POST["otp_num"])) {
        $otp_array = $_POST["otp_num"];
    }

    if (!is_array($otp_array)) {
        $otp_array = [];
    }

    $otp_num = htmlspecialchars(implode("", $otp_array));// gives you the otp in string format

    //errors
    if(empty($otp_num)){
        $errors["otp"] = "please input your otp code";
    }
    elseif (strlen($otp_num) < 6 || !ctype_digit($otp_num) ) {
        $errors["otp"] = "otp must be atleast six numbers long";
    }
    // now save char from db
    if (!array_filter($errors)){
        $save = $conn -> prepare("SELECT otp, otp_expires_at FROM users WHERE email = ?");
        $save -> bind_param("s", $email);
        $save -> execute();
        $save -> store_result();
    
        if ($save -> num_rows() > 0){
            $save -> bind_result($saved_otp, $exp_otp);
            $save -> fetch();
            // SET current time so that your code will know the current time and check how far it is from normal time
            $current_time  = time();
            $otp_time = strtotime($exp_otp);
            if ($current_time > $otp_time){
                $clear = $conn -> prepare("UPDATE users SET otp = NULL, otp_expires_at = NULL WHERE email = ?");
                $clear -> bind_param("s", $email);
                $clear -> execute();
                $clear -> close();
    
    
                $errors["otp"] = "OTP has expired";
            }
            elseif ((string)$otp_num !== (string)$saved_otp) {
                $errors["otp"] = "OTP does not match please check again";
            }
            else {
                $clear = $conn -> prepare("UPDATE users SET otp = NULL, otp_expires_at = NULL WHERE email = ?");
                $clear -> bind_param("s", $email);
                $clear -> execute();
                $clear -> close();
    
                $_SESSION["otp_email"] = $email;
                header("Location: ./preset-password.php");
            }
        }
        else {
            $errors["otp"] = "NO OTP found for this email";
        }
        $save -> close();
        $conn -> close();
    }
}
?>