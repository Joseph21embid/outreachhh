    <?php
    session_start();
    include "../../config/db.php";

    // Only therapists should view notifications
    if (!isset($_SESSION["user_id"]) || $_SESSION["role"] != 2) {
        header("Location: ../plogin.php");
    }

    if (isset($_GET["id"]) && isset($_GET["link"])) {
        $notif_id = (int)$_GET["id"];
        $chat_id = $_GET["link"]; // This is now just the chat_room_id

        // Mark notification as seen
        $stmt = $conn->prepare("UPDATE notifications SET seen = 1 WHERE id = ?");
        $stmt->bind_param("i", $notif_id);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        // Redirect to therapist UI
        header("Location: ../chat.php?chat_id=" . urlencode($chat_id));
    }
