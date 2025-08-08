<?php include "auth/reset.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <!-- Documents Links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/treset-password.css">
    <link rel="icon" href="images/white_logo.png" type="image/png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />




</head>


<body>
    

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="images/black_logo.png" alt="Logo" width="30" height="30">
                <p>OUTREACH</p>
            </a>

            <p class="no_acc1">
                Already a member? <a href="tlogin.php">Continue your journey.</a>
            </p>
            
        </div>
    </nav>


    

    <section>

                

        <div class="hands">
            <img src="images/hands1.png" alt="" class="staticHand">

            <img src="images/left.png" alt="" class="hand1">
            <img src="images/right.png" alt="" class="hand2">
        </div>


        <div class="form_cont container d-flex justify-content-center align-items-center">

            <h1>Reset password<span class="text-span">.</span></h1>
            <p class="intro">Please kindly set your new password</p>

            <form action="" method="post" class=" w-100 w-md-75 w-lg-50 p-4">

                <div class="mb-1 password_div col-12 col-md-6">
                    <label for="password" class="form-label">New password</label>
                    
                    <div class="input-wrapper">
                        <input type="password" name="pass" placeholder="Enter Password" class="form-control" id="password" required>
                        <span class="eye-icon fas fa-eye-slash" id="togglePassword"></span> 
                    </div>

                    <p style="color: red;"><?php echo $errors["pass"] ?></p>
                </div>

                <div class="strength mb-4 col-12 col-md-6">

                    <div class="weak">
                        <div id="weak"></div>
                    </div>
                    <div class="average">
                        <div id="average"></div>
                    </div>
                    <div class="strong">
                        <div id="strong"></div>
                    </div>

                </div>

                <div class="mb-3 password_div col-12 col-md-6">
                    <label for="cpassword" class="form-label">Confirm password</label>
                    
                    <div class="input-wrapper">
                        <input type="password" name="cpass" placeholder="Re-enter password" class="form-control" id="cpassword" required>
                        <span class="eye-icon fas fa-eye-slash" id="toggleCPassword"></span> 
                    </div>

                    <p style="color: red;"><?php echo $errors["cpass"] ?></p>
                </div>


                <div class="d-grid mt-3 col-12 col-md-6">
                    <input type="submit" class="btn btn-primary submit" name="t_submit" value="Reset Password">
                </div>

            </form>


            <p class="no_acc2">
                Already a member? <a href="tlogin.php">Continue your journey</a>
            </p>


            
        </div>



    </section>

    <!-- Footer  -->
    <footer class=" py-5">
        <div class="container">
 
            <hr class="mt-4">
            <p class="text-center mb-0">&copy; 2025 Outreach. All rights reserved. Your mental health matters. You are not alone. | <a href="">Privacy Policy</a></p>

        </div>
    </footer>



    <!-- Java Script -->
    <script src="assets/js/treset-password.js"></script>

</body>


</html>












