<?php
session_start();
include "../config/db.php";

$user_id = $_SESSION["user_id"];
$filter = "all";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["filter"]) ) {

    $filter = $_POST["filter"];
}

if ($filter === "unread") {
    $query = "SELECT id, title, message, link, created_at, seen FROM notifications WHERE user_id = ? AND seen = 0 ORDER BY created_at DESC";
}

elseif ($filter === "read") {
    $query = "SELECT id, title, message, link, created_at, seen FROM notifications WHERE user_id = ? AND seen = 1 ORDER BY created_at DESC";
}

else {
    // Default to all
    $query = "SELECT id, title, message, link, created_at, seen FROM notifications WHERE user_id = ? ORDER BY created_at DESC";
}




$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();




?>