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
        $errors["problems"] = "Please select atleast one problem";
    }

    if (!array_filter($errors)) {
        //inserrt in db

        $user_id = $_SESSION["user_id"];

        $checkstmt = $conn->prepare("SELECT id FROM therapist WHERE user_id = ? ");
        $checkstmt->bind_param("i", $user_id);
        $checkstmt->execute();
        $checkstmt->store_result();

        if ($checkstmt->num_rows == 1) {
            $checkstmt->bind_result($tid);
            $checkstmt->fetch();
        } else {
            $errors["problems"] = "Make sure you've signed up to pass this phase ";
        }
        $checkstmt->close();

        if (!empty($tid)) {
            $stmt = $conn->prepare("INSERT INTO therapist_solution (problem_id, therapist_id) VALUES (?,?) ");
            if ($stmt) {
                foreach ($problems as $pid) {
                    $pid = (int)$pid;
                    $stmt->bind_param("ii", $pid, $tid);
                    $stmt->execute();
                }
                
            }
            $stmt -> close();
        }
        else {
            $errors["problems"] = "Therapist not registered";
        }
        $conn->close();
        header("Location: ../home/therapist.php");

    }
}
