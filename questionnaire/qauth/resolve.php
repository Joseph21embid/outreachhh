<?php
include "../config/db.php";
session_start();
$errors = array("problems" => "");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["special"])) {

    if (isset($_POST["problems"]) && is_array($_POST["problems"])) {
        $problems = $_POST["problems"];
    }

    //validate
    if (empty($problems)) {
        $errors["problems"] = "Please select atleast oe problem";
    }

    if (!array_filter($errors)) {
        //inserrt in db
        $patient_id = $_SESSION["username"];

        if (!empty($patient_id)) {
            $stmt = $conn->prepare("INSERT INTO user_problems (problem_id , patient_id) VALUES(?, ?) ");
            if ($stmt) {
                foreach ($problems as $problems_id) {
                    $problems_id = (int)$problems_id;
                    $stmt->bind_param("is", $problems_id, $patient_id);
                    if ($stmt->execute()){
                        $_SESSION["problems"] = $problems_id;
                    }
                }
            }
            $stmt->close();
            $conn->close();
        } else {
            $errors["problems"] = "Sign up to use feature";
        }

        header("Location: ../chat/relate.php");
    }
}

// $user_id = $_SESSION["user_id"];

// $checkstmt = $conn->prepare("SELECT name_tag FROM users WHERE user_id = ? ");
// $checkstmt->bind_param("i", $user_id);
// $checkstmt->execute();
// $checkstmt->store_result();

// if ($checkstmt->num_rows == 1) {
//     $checkstmt->bind_result($tid);
//     $checkstmt->fetch();
// } else {
//     $errors["problems"] = "Make sure you've signed up to pass this phase ";
// }
// $checkstmt->close();