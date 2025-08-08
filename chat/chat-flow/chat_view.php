<?php
session_start();

$chat_id = isset($_GET["chat_id"]) ? $_GET["chat_id"] : (isset($_SESSION["chat_id"]) ? $_SESSION["chat_id"] : null);
if (!$chat_id) {
    echo json_encode(["error" => "Chat ID not found"]);
    exit();
}

include "../../config/db.php";
require '../../vendor/autoload.php';

use Pusher\Pusher;

header('Content-Type: application/json');

// ✅ Check session
if (!isset($_SESSION["user_id"])) {
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

$user_id = $_SESSION["user_id"];

// ✅ Pusher setup
$pusher = new Pusher(
    'f9703540cc41a1d12c2c',  // KEY
    'bf2fa299944d3b84f2b5',  // SECRET
    '2031025',               // APP ID
    [
        'cluster' => 'mt1',
        'useTLS' => true
    ]
);

// ✅ HANDLE POST (sending message)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!$data || !isset($data["message"], $data["chat_id"])) {
        echo json_encode(["error" => "Invalid input"]);
        exit;
    }

    $message = trim($data["message"]);
    $chat_id = $data["chat_id"];

    if ($message === "") {
        echo json_encode(["error" => "Empty message"]);
        exit;
    }

    // ✅ Confirm chat session exists
    $stmt = $conn->prepare("SELECT user_id, therapist_id FROM chat_sessions WHERE chat_room_id = ?");
    $stmt->bind_param("s", $chat_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        echo json_encode(["error" => "Chat session not found"]);
        exit;
    }

    $stmt->bind_result($p1, $p2);
    $stmt->fetch();
    $stmt->close();

    if ($user_id == $p1) {
        $receiver_id = $p2;
    } elseif ($user_id == $p2) {
        $receiver_id = $p1;
    } else {
        echo json_encode(["error" => "User not in chat"]);
        exit;
    }

    $name_stmt = $conn->prepare("SELECT name_tag FROM users WHERE id = ?");
    $name_stmt->bind_param("i", $other_id);
    $name_stmt->execute();
    $name_stmt->bind_result($other_username);
    $name_stmt->fetch();
    $name_stmt->close();

    // ✅ Save message to DB
    $insert = $conn->prepare("INSERT INTO chat_messages (session_id, sender_id, receiver_id, message) VALUES (?, ?, ?, ?)");
    $insert->bind_param("siis", $chat_id, $user_id, $receiver_id, $message);

    if ($insert->execute()) {
        // ✅ Push real-time event
        $payload = [
            "message" => $message,
            "sender_id" => $user_id
        ];
        $pusher->trigger("chat-{$chat_id}", "new-message", $payload);

        echo json_encode(["status" => "Message saved"]);
    } else {
        echo json_encode(["error" => "Database insert failed"]);
    }

    exit;
}

// ✅ HANDLE GET (load old messages)
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["chat_id"])) {
    $chat_id = $_GET["chat_id"];

    $check = $conn->prepare("SELECT id FROM chat_sessions WHERE chat_room_id = ?");
    $check->bind_param("s", $chat_id);
    $check->execute();
    $check->store_result();

    if ($check->num_rows === 0) {
        echo json_encode(["error" => "Chat session not found"]);
        exit;
    }

    $stmt = $conn->prepare("SELECT sender_id, message, created_at FROM chat_messages WHERE session_id = ? ORDER BY created_at ASC");
    $stmt->bind_param("s", $chat_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $messages = [];
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    echo json_encode($messages);
    exit;
}

echo json_encode(["error" => "Invalid request"]);
