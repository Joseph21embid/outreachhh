<?php
include "chat-flow/notif.php";

if ($_SESSION["role"] == 2) {?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notifications</title>

        <!-- Document Links -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="th_notification.css">
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
                    
                    <a href="../home/therapist.php">
                        <span class="material-symbols-outlined">home_app_logo</span>
                        <h3>Home</h3>
                    </a>

                    <a href="" >
                        <span class="material-symbols-outlined">chat</span>
                        <h3>Chat</h3>
                    </a>

                    <a href="../chat/th_notification.php" class="active">
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

                    <div class="cta_button">
                        <!-- <a href="../questionnaire/help.php">
                            <span class="material-symbols-outlined">psychiatry</span>
                            <p>Talk to Therapist </p>
                        </a> -->
                    </div>

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
                        <h1>Notifications<span>.</span></h1>

                        <div>
                            <form action="" class="drop_form" method="post">
                                <select name="filter" onchange="this.form.submit()" id="filterNotif" class="styled-select">
                                    <option value="all"  <?php if ($filter === 'all') echo 'selected'; ?> >All</option>
                                    <option value="unread"  <?php if ($filter === 'unread') echo 'selected'; ?> >Unread</option>
                                    <option value="read"  <?php if ($filter === 'read') echo 'selected'; ?> >Read</option>
                                </select>
                                <span class="material-symbols-outlined dropdown-icon">keyboard_arrow_down</span>
                            </form>
                        </div>
                    </div>

                    <div class="content">
                        <ul class="list-group">
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <li class="list-group-item">

                                    <div class="notif_content">
                                        <div>
                                            <strong><?php echo htmlspecialchars($row['title']); ?></strong>
                                            <?php echo htmlspecialchars($row['message']); ?>
                                        </div>

                                        <div>
                                            <small><?php echo $row['created_at']; ?></small>
                                        </div>
                                    </div>

                                    <?php if ($row["seen"] == 0 ) { ?>
                                        <a class="btn btn-sm btn-primary mt-2"
                                            href="chat-flow/mark_notif.php?id=<?php echo $row['id']; ?>&link=<?php echo urlencode($row['link']); ?>">
                                            View Chat
                                        </a>
                                    <?php } elseif($row["seen"] == 1 ) {?>

                                        <button style="  font-size: 0.9rem; padding: 7px 12px; text-align: center;  background-color: var(--color-dark);  color: white;  margin-top: 5px;  transition: all 300ms ease-in-out;" disabled >Viewed</button>

                                    <?php }?>

                                </li>
                            <?php endwhile; ?>
                        </ul>

                    </div>

                </div>


                
            </main>
            <!---------- Main Section Ending --------------------->


        </div>


    <script src="th_notification.js"></script>

    </body>
    </html>




<?php } else {
    header("location: ../index.php");
}
?>