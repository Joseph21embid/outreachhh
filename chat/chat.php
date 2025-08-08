<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: ../plogin.php");
    exit();
}
if (isset($_GET["chat_id"])) {
    $_SESSION["chat_id"] = $_GET["chat_id"];
}
$chat_id = isset($_GET["chat_id"]) ? $_GET["chat_id"] : (isset($_SESSION["chat_id"]) ? $_SESSION["chat_id"] : null);
if (!$chat_id) {
    echo "❌ Chat ID not found.";
    exit();
}

include "../config/db.php"; // ✅ Make sure DB is connected

$user_id = $_SESSION["user_id"];
$other_username = "Unknown"; // default fallback

$stmt = $conn->prepare("SELECT user_id, therapist_id FROM chat_sessions WHERE chat_room_id = ?");
$stmt->bind_param("s", $chat_id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($p1, $p2);
    $stmt->fetch();
    $stmt->close();

    // figure out the other person
    if ($user_id == $p1) {
        $other_id = $p2;
    } elseif ($user_id == $p2) {
        $other_id = $p1;
    }

    // fetch their username
    if (isset($other_id)) {
        $stmt2 = $conn->prepare("SELECT name_tag FROM users WHERE id = ?");
        $stmt2->bind_param("i", $other_id);
        $stmt2->execute();
        $stmt2->bind_result($other_username);
        $stmt2->fetch();
        $stmt2->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>

    <!-- Document Links -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="chat.css">
    <link rel="icon" href="images/white_logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>

<body>


    <div class="container">



        <!----------------- Collapsable Side Bar ----------------------->
        <aside>

            <!-- Top section of the side bar [Logo & Company Name]-->
            <div class="top">
                <div class="logo">
                    <img src="../images/black_logo.png" alt="logo">
                    <h2>Outreach</h2>
                </div>

                <div class="close" id="closeBtn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <!-- Top section of the side bar ending -->


            <!-- Actual Side Bar Menu/Links -->
            <div class="sidebar">
                <?php if ($_SESSION["role"] == 2) { ?>
                    <a href="../home/therapist.php">
                        <span class="material-symbols-outlined">home_app_logo</span>
                        <h3>Home</h3>
                    </a>
                <?php } else {?>
                    <a href="../home/victim.php">
                        <span class="material-symbols-outlined">home_app_logo</span>
                        <h3>Home</h3>
                    </a>
                <?php } ?>
                
                <a href="" class="active">
                    <span class="material-symbols-outlined">chat</span>
                    <h3>Chat</h3>
                </a>

                <a href="../chat/th_notification.php" >
                    <span class="material-symbols-outlined">notifications_active</span>
                    <h3>Notifications</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>


                <a href="logout.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
                

            </div>
            <!------------------- Actual Side Bar Menu ending ------------------------->

        </aside>
        <!---------------------- Collapsable Side Bar Ending --------------------------->


        <!---------------- Main Section --------------------->
        <main>

            <div class="main_head">

                <h1 class="chat-intro">Chat Session<span>...</span></h1>

                <div class="menu" id="menuBtn">
                    <button>
                        <span class="material-symbols-outlined">segment</span>
                    </button>
                </div>


                <div class="profile_info">

                    <div class="profile-photo">
                        <img src="../chat/avatar.png" alt="" >
                    </div>

                    <div>
                        <p><?php echo $_SESSION["username"] ?></p>
                    </div>
                    <button>
                        <span class="material-symbols-outlined">stat_minus_1</span>
                    </button>
                    
                </div>
                

            </div>
        
                
            <div class="hero">

                <div class="title">

                    <div class="block1">
                        <div class="chat-profile">
                            <img src="../chat/avatar.png" alt="" class="profile-photo">
                            <h1><?= htmlspecialchars($other_username) ?></h1>
                        </div>

                        <button class="end">
                            End Chat
                        </button>
                                
                        <div class="title-btn">
                            <button>
                                <span class="material-symbols-outlined">call</span>
                            </button>
                            <div></div>
                            <button>
                                <span class="material-symbols-outlined">videocam</span>
                            </button>
                        </div>
                    </div>

                    <div class="profile-hr"></div>
                    

                    <button class="end2">
                        End Chat
                    </button>
                    
                </div>

                

                <div class="content">
                    <div class="container">

                        <div class="chat">
                            <div id="chat-box" class="chat-box d-flex flex-column mb-3"></div>
                            <form id="chat-form" class="d-flex"  onsubmit="return false;">

                                <button id="emoji-button"><span class="material-symbols-outlined" style="display: flex; align-items: center; justify-content: center">
                                    sentiment_satisfied</span>
                                </button>

                                <input type="text" id="message-input" class="form-control" placeholder="Type a message..." autocomplete="off">

                                <button type="submit" class="btn btn-success ms-2">
                                    <span class="material-symbols-outlined">send</span>
                                </button>

                            </form>
                        </div>
                        
                    </div>
                </div>

            </div>




            
        </main>
        <!---------- Main Section Ending --------------------->


    </div>


    <div id="context-menu" style="
        position: absolute;
        display: none;
        background: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        z-index: 9999;
        border-radius: 6px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        min-width: 150px;
    ">
        <ul style="list-style: none; margin: 0; padding: 8px 0;">
            <li class="context-item" onclick="copyMessage()" style="padding: 8px 16px; cursor: pointer;">📋 Copy</li>
            <li class="context-item" onclick="deleteMessage()" style="padding: 8px 16px; cursor: pointer;">❌ Delete</li>
            <li class="context-item" onclick="replyMessage()" style="padding: 8px 16px; cursor: pointer;">💬 Reply</li>
            
        </ul>
    </div>





    
    <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
    <script>
    const user_id = <?= $_SESSION["user_id"] ?>;
    const chat_id = "<?= $chat_id ?>";

    const chatBox = document.getElementById("chat-box");
    const form = document.getElementById("chat-form");
    const input = document.getElementById("message-input");

    // ✅ Connect to Pusher
    const pusher = new Pusher("f9703540cc41a1d12c2c", {
        cluster: "mt1",
        encrypted: true
    });

    // ✅ Subscribe to chat-specific channel
    const channel = pusher.subscribe(`chat-${chat_id}`);

    // ✅ Listen for new messages
    channel.bind("new-message", function (data) {
        appendMessage(data.message, data.sender_id);
    });

    // ✅ Append to UI
    function appendMessage(message, senderId) {
        const div = document.createElement("div");
        div.classList.add("chat-bubble");
        div.classList.add(senderId == user_id ? "you" : "other");
        div.textContent = message;
        chatBox.appendChild(div);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    // ✅ On form submit
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const message = input.value.trim();
        if (message === "") return;

        fetch("chat-flow/chat_view.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ message: message, chat_id: chat_id })
        })
        .then(res => res.json())
        .then(data => {
        if (data.status !== "Message saved") {
            alert("❌ Could not save message.");
        }
        });

        input.value = "";
    });

    // ✅ Load old messages
    function loadMessages() {
        fetch(`chat-flow/chat_view.php?chat_id=${chat_id}`)
        .then(res => res.json())
        .then(data => {
            data.forEach(msg => appendMessage(msg.message, msg.sender_id));
        });
    }

    loadMessages();

    let selectedMessage = null;

// Show context menu on right-click of a message
chatBox.addEventListener("contextmenu", function (e) {
    if (e.target.classList.contains("chat-bubble")) {
        e.preventDefault();
        selectedMessage = e.target;

        const menu = document.getElementById("context-menu");
        menu.style.top = `${e.clientY}px`;
        menu.style.left = `${e.clientX}px`;
        menu.style.display = "block";
    }
});

// Hide menu when clicking elsewhere
document.addEventListener("click", function () {
    document.getElementById("context-menu").style.display = "none";
});

// 📋 COPY
function copyMessage() {
    if (selectedMessage) {
        const text = selectedMessage.textContent;
        navigator.clipboard.writeText(text).then(() => {
            // alert("📋 Message copied!");
        }).catch(() => {
            alert("❌ Copy failed. browser probably blocked clipboard process");
        });
    }
}

// ❌ DELETE (UI only for now)
function deleteMessage() {
    if (selectedMessage) {
        if (confirm("Delete this message?")) {
            selectedMessage.remove();
            // Later: send request to delete from database
        }
    }
}

// 💬 REPLY
function replyMessage() {
    if (selectedMessage) {
        const text = selectedMessage.textContent;
        input.value = `@${text}\n`;
        input.focus();
    }
}

    </script>



    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@latest/dist/index.min.js"></script>
    <script src="chat.js"></script>

    
</body>
</html>




