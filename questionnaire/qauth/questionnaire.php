<?php

use function PHPSTORM_META\type;

include "../config/db.php";



session_start();
$errors = array("fname" => "", "country" => "", "email" => "", "phone" => "", "qualification" => "", "licensed" => "", "upload" => "", "motivation" => "", "misconduct" => "", "signature" => "");

if ($_SERVER["REQUEST_METHOD"] === "POST" &&  isset($_POST["submit"])) {
    //post in fields from front end
    $fname = htmlspecialchars($_POST["fullName"]);
    $country = htmlspecialchars($_POST["country"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $qualification = htmlspecialchars($_POST["qualification"]);
    $licensed = htmlspecialchars($_POST["licensed"]);
    $upload = $_FILES["licenseUpload"];
    $motivation = htmlspecialchars($_POST["motivation"]);
    $misconduct = htmlspecialchars($_POST["misconduct"]);
    $signature = htmlspecialchars($_POST["signature"]);

    //ERRORS

    if (empty($fname)) {
        $errors["fname"] = "ineligible naming convention";
    } elseif ($fname !== $signature) {
        $errors["fname"] = "Names must match";
    }

    if (empty($phone)) {
        $errors["phone"] = "Please input phone details";
    } elseif (!preg_match("/^0\d{10}$/", $phone)) {
        $errors["phone"] = "Phone number not authentic";
    }

    if (empty($qualification)) {
        $errors["qualification"] = "Select  Qualification ";
    }

    if (empty($licensed)) {
        $errors["licensed"] = "Please select license";
    }

    if ($upload["error"] === 0) {
        $file_type = mime_content_type($upload["tmp_name"]);
        $allowed_types = ["image/jpeg", "image/png", "image/webp", "application/pdf"];

        if (!in_array($file_type, $allowed_types)) {
            $errors["upload"] = "Invalid file type";
        }
    }

    if (empty($motivation)) {
        $errors["motivation"] = "Please input phone details";
    }

    // if (empty($misconduct)) {
    //     $errors["misconduct"] = "Please input phone details";
    // } elseif ($misconduct === "yes") {
    //     $errors["misconduct"] = "You Have done misconduct no therapist for you";
    // }

    if (empty($signature)) {
        $errors["signature"] = "Please input phone details";
    }


    //ENTER INTO DB
    if (!array_filter($errors)) {
        // set file destination
        $coverName = $upload["name"]; // takes name of field
        $coverTemp = $upload["tmp_name"]; // taks temporaryl file location
        $uniqueName = uniqid() . "_" . $coverName; // gives unique id to book
        $destination = "../questionnaire/certificate/" . $uniqueName;
        //insert
        if (move_uploaded_file($coverTemp, $destination)) {
            $stmt = $conn->prepare("INSERT INTO therapist (user_id, full_name, country, email, phone, qualification, liscensed, upload, motivation, misconduct, signature ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
            $user_id = $_SESSION["user_id"];
            $stmt->bind_param("isssissssss", $user_id, $fname, $country, $email, $phone, $qualification, $licensed, $destination, $motivation, $misconduct, $signature);
            if ($stmt->execute()) {
                $_SESSION["therapist_id"] = $conn -> insert_id;
                header("Location: ../questionnaire/area.php");
            } else {
                $errors["country"] = "failed. db error";
            }
            $stmt->close();
            $conn->close();
        } else {
            $errors["upload"] = "failed image upload";
        }
    }
}
