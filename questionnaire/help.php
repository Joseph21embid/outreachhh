<?php
include "qauth/resolve.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Category</title>

    <!-- Document Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="help.css">
    <link rel="icon" href="../images/white_logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>

<body>
<body>


        <div class="containerss">



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

                    <section class="home" style="position: relative; overflow: hidden;">


                        <form action="" method="post" class="container mt-5 p-4 rounded shadow bg-light main_form" style="max-width: 700px;">
                            <div class="d-flex justify-content-center align-items-center header">
                                <h1 class="mb-5 " style="text-align: center;" >Kindly <span>Indicate</span> Category</h1>
                            </div>
                            <?php
                            // Fetch all problems from DB
                            $problems = $conn->query("SELECT id, issues FROM problems");
                            ?>

                            <div class="mb-4">

                                <div class="row">
                                    <?php while ($issues = $problems->fetch_assoc()): ?>
                                        <div class="col-md-6 form-cont">
                                            <div class="form-check mb-2">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    name="problems[]"
                                                    value="<?php echo $issues['id']; ?>"
                                                    id="problem_<?php echo $issues['id']; ?>">
                                                <label
                                                    class="form-check-label"
                                                    for="problem_<?php echo $issues['id']; ?>">
                                                    <?php echo htmlspecialchars($issues['issues']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <p class="t error-msg"><?php echo $errors['problems']; ?></p>
                            </div>

                            <button type="submit" name="special" class="btn btn-primary w-100 submit_btn">
                                Submit Application
                                <span class="material-symbols-outlined">keyboard_capslock</span>
                            </button>

                        </form>


                    </section>


                </div>



                
            </main>
            <!---------- Main Section Ending --------------------->


        </div>


        
    </body>





    


    <!-- Nav Bar -->
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">


            <a class="navbar-brand" href="../index.php">
                <img src="../images/black_logo.png" alt="Logo" width="30" height="30">
                <p>OUTREACH</p>
            </a>


            <div class="urgent_div">
                <button class="btn logout" type="button">Log Out</button>
            </div>

        </div>
    </nav>

    <section class="home" style="position: relative; overflow: hidden;">


        <section>

            <form action="" method="post" class="container mt-5 p-4 rounded shadow bg-light" style="max-width: 700px;">
                <div class="d-flex justify-content-center align-items-center header">
                    <h1 class="mb-4">Kindly <span>Indicate</span>,</h1>
                </div>
                <?php
                // Fetch all problems from DB
                //$problems = $conn->query("SELECT id, issues FROM problems");
                ?>

                <div class="mb-4">
                    <label class="form-label fw-bold">What problems we can help you with?</label>

                    <div class="row">
                        <?php //while ($issues = $problems->fetch_assoc()): ?>
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="problems[]"
                                        value="<?php //echo $issues['id']; ?>"
                                        id="problem_<?php //echo $issues['id']; ?>">
                                    <label
                                        class="form-check-label"
                                        for="problem_<?php //echo $issues['id']; ?>">
                                        <?php //echo htmlspecialchars($issues['issues']); ?>
                                    </label>
                                </div>
                            </div>
                        <?php //endwhile; ?>
                    </div>
                    <p class="text-danger mt-1 t"><?php // echo $errors['problems']; ?></p>
                </div>

                <button type="submit" name="special" class="btn btn-primary w-100 submit_btn">
                    Submit Application
                    <span class="material-symbols-outlined">keyboard_capslock</span>
                </button>

            </form>


        </section>

    </section> -->

    
    <!-- <footer class=" py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-3 mb-4 mb-md-0 logo-cont">
                    <div class="logo">
                        <img src="images/black_logo.png" alt="">
                        <h4>Outreach</h4>
                    </div>
                    <p>Inspiring hope, facilitating healing, and empowering mental wellness journeys.</p>
                </div>
                <div class="col-12 col-md-3 mb-4 mb-md-0 service" >
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none" style="color: #a3a3a3">Private Therapy</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Crisis Support</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Audio Calls</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-4 mb-md-0 support">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">FAQ</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Pricavy Policy</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Contact</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 contact">
                    <h5>Stay Connected</h5>
                    <p>Subscribe to our newsletter for updates.</p>
                    <form>
                    <input type="email" class="form-control mb-2" placeholder="Email address">
                    <button type="submit" class="btn btn-outline-light w-100">Subscribe</button>
                    </form>
                </div>
            </div>
            <hr class="mt-4">
            <p class="text-center mb-0">&copy; 2025 Outreach. All rights reserved. Your mental health matters. You are not alone.</p>
        </div>
    </footer> -->

    <script src="help.js" ></script>


<!-- </body> -->

</html>