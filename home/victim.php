<?php
session_start();
?>


<?php if ($_SESSION["role"] == 3) { ?>
    <!--  start writing font end code from here -->

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Outreach</title>

        <!-- Document Links -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="assets/css/victim.css">
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
                    
                    <a href="#" class="active">
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

                    <a href="../questionnaire/help.php">
                        <span class="material-symbols-outlined">psychiatry</span>
                        <h3>Visit Therapist</h3>
                    </a>


                    <a href="../chat/logout.php">
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

                    <h1>Outreach 1.0 | Prototype Preview and Working Features</h1>

                    <h2>This is the first prototype of Outreach (version 1.0), While some features are still under development, the following features are currently functional and available for testing.</h2>
                    <div class="desc">

                        <div class="points">
                            <span class="material-symbols-outlined">lens_blur</span>
                            <p>Talking to a Therapist: The chat system for contacting a therapist is functional. If a therapist is available, users can initiate a conversation. You can also test this by creating an account on another device as a therapist and selecting yourself to simulate a session.</p>
                        </div>

                        <div class="points">
                            <span class="material-symbols-outlined">lens_blur</span>
                            <p>Viewing notifications to access chats you've just entered or previously participated in is also a functional feature in this version of Outreach.</p>
                        </div>

                        <div class="points">
                            <span class="material-symbols-outlined">lens_blur</span>
                            <p>Creating an account is also functional.. though you probably already know that, since you wouldn't be seeing this page otherwise.</p>
                        </div>

                        <div class="points">
                            <span class="material-symbols-outlined">lens_blur</span>
                            <p>You can log out of your account, and you'll be redirected back to the home page, this feature is working as expected.</p>
                        </div>

                        <div class="points">
                            <span class="material-symbols-outlined">lens_blur</span>
                            <p>All pages are fully responsive, so you can test the interface on both mobile and desktop views.</p>
                        </div>

                        <div class="points">
                            <p>While many more features are yet to be implemented, we're excited about the potential of Outreach and would be truly grateful for the opportunity to advance to the next round so we can fully demonstrate just how far this platform can go.</p>
                        </div>
                        
                    </div>

                </div>



                
            </main>
            <!---------- Main Section Ending --------------------->


        </div>

    <script src="assets/js/victim.js"></script>
        
    </body>
    </html>

    



<?php } else{
    header("location: ../plogin.php");
    }
    
?>