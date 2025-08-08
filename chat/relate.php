<?php include "chat-flow/get_conn.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Therapists</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="relate.css">

     <!-- Document Links -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
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
                    
                    <a href="../home/victim.php">
                        <span class="material-symbols-outlined">home_app_logo</span>
                        <h3>Home</h3>
                    </a>

                    <a href="" >
                        <span class="material-symbols-outlined">chat</span>                 
                        <h3>Chat</h3>
                    </a>

                    <a href="">
                        <span class="material-symbols-outlined">notifications_active</span>
                        <h3>Notifications</h3>
                    </a>

                    <a href="../questionnaire/help.php" class="active">
                        <span class="material-symbols-outlined">psychiatry</span>
                        <h3>Visit Therapist</h3>
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
                        <a href="../questionnaire/help.php">
                            <span class="material-symbols-outlined">psychiatry</span>
                            <p>Talk to Therapist </p>
                        </a>
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
                    
                    <h2 class="des">Connect with a Therapist Who Understands</h2>
                    <div class="list">

                        <div class="row">
                            <div class="profile-container">
                                <?php if (!empty($therapists)): ?>
                                    <?php foreach ($therapists as $therapist): ?>
                                        <div class="profile-card">
                                            <div class="details">
                                                <img src="avatar.png" alt="profile" class="profile-img">
                                                <div class="name">
                                                    <div class="therapist-info">
                                                        <div class="therapist-name"><?php echo htmlspecialchars($therapist['full_name']); ?></div>
                                                        <p class="text-muted mb-1 country">Country: <?php echo htmlspecialchars($therapist['country']); ?></p>
                                                        <p class="text-muted mb-0">ID: <strong><?php echo htmlspecialchars($therapist['name_tag']); ?></strong></p>
                                                    </div>
                                                </div>             
                                            </div>
                                            <form action="" method="post">
                                                <input type="hidden" name="tuser_id" value="<?php echo htmlspecialchars($therapist['user_id']); ?>">
                                                <input type="hidden" name="tuser_name" value="<?php echo htmlspecialchars($therapist['name_tag']); ?>">
                                                <button type="submit" class="btn btn-primary w-100 connect-btn" name="">Connect</button>
                                            </form>
                                        </div>
                                    
                                    <?php endforeach; ?>
                                <?php else: ?>
                            </div>
                                <div class="col-12">
                                    <p class="text-danger">No therapists are currently available for this problem.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>




                
            </main>
            <!---------- Main Section Ending --------------------->


        </div>

    <script src="relate.js"></script>
        
    </body>



</html>








