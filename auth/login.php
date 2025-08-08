<?php
session_start();
include "./config/db.php";
$mail = $pass = "";
$errors = array("email" => "", "pass" => "");


if ($_SERVER["REQUEST_METHOD"] === "POST" &&  isset($_POST["v_submit"]) || isset($_POST["t_submit"])) {
    $mail = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["pass"]);
    // $cpass = htmlspecialchars($_POST["cpass"]);
    //validations
    if (empty($mail)) {
        $errors["email"] = "Please insert email";
    }
    if (empty($pass)) {
        $errors["pass"] = "Please insert email";
    } elseif (strlen($pass) < 8 || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d\W_]+$/", $pass)) {
        $errors["pass"] = "Your password must be <br>  ...More than eight characters <br> ...Must Contain bot uppercase and lowercase letters <br> ...Must contain numbers ";
    }
    // if (empty($cpass)){
    //     $errors["pass"] = "Please insert email";
    // }
    // elseif ($cpass !== $pass) {
    //     $errors["cpass"] = "The passwords dont match";
    // }
    if (!array_filter($errors)) {
        $stmt = $conn->prepare("SELECT id, role_id, name_tag, pass FROM users WHERE email = ?");
        if (!$stmt) {
            die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        }

        $stmt->bind_param("s", $mail);
        $stmt->execute();
        $stmt->store_result();
        //conditional statement that tells you if rows with those info is on

        if ($stmt->num_rows  == 1) {
            $stmt->bind_result($user_id, $role_id, $username, $saved_pass);
            $stmt->fetch();

            // if ($pass !== $saved_pass) {
            //     $errors["pass"] = "You inputed the wrong password";
            // }

            if (password_verify($pass, $saved_pass)) {
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $role_id;
                $_SESSION["user_id"] = $user_id;
                $_SESSION["email"] = $mail;

                if ($role_id == 2) {
                    header("Location: ./home/therapist.php");
                } elseif ($role_id == 3) {
                    header("Location: ./home/victim.php");
                } else {
                    $errors["email"] = "Wrong role contact admin";
                }
            } else {
                $errors["pass"] = "You inputed the wrong password";
            }
        } else {
            $errors["email"] = "No Email found";
        }
    }
}
