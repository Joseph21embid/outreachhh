<?php include "auth/verify-otp.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>

    <!-- Documents Links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/pemail-sent.css">
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

            
        </div>
    </nav>


    

    <section>

                

        <div class="hands">
            <img src="images/hands1.png" alt="" class="staticHand">

            <img src="images/left.png" alt="" class="hand1">
            <img src="images/right.png" alt="" class="hand2">
        </div>


        <div class="form_cont container d-flex justify-content-center align-items-center">
            <h1>Verify Your Identity<span class="text-span">.</span></h1>
            <p class="intro">We’ve sent a one-time code to <span class="text-span"><?php echo $_SESSION["email"] ?></span>Please enter it below to continue securely.</p>

            <form action="" method="post" class=" w-100 w-md-75 w-lg-50 p-4">
                <div class="inputs-div mb-3 col-12 col-lg-6">
                    <input type="text" class="otp" name ="otp_num[]" inputmode="numeric" maxlength="1" required>
                    <input type="text" class="otp" name ="otp_num[]" inputmode="numeric" maxlength="1" required>
                    <input type="text" class="otp" name ="otp_num[]" inputmode="numeric" maxlength="1" required>
                    <input type="text" class="otp" name ="otp_num[]" inputmode="numeric" maxlength="1" required>
                    <input type="text" class="otp" name ="otp_num[]" inputmode="numeric" maxlength="1" required>
                    <input type="text" class="otp" name ="otp_num[]" inputmode="numeric" maxlength="1" required>
                </div>

                <p style=" text-align:center; color: red;"><?php echo $errors["otp"]?></p>

                <div style="display: flex; justify-content: center; align-items: center;" class="mt-3 mb-3">
                    <button id="clearOtp" class="btn btn-outline-secondary clear-btn">Clear Code</button>
                </div>


                <div class="d-grid mt-3 col-12 col-md-6">
                    <input type="submit" class="btn btn-primary submit" name="v_submit" value="Verify Code">
                </div>

            </form>

            <p class="resend"> 
                <a href="#">Resend Code</a>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/pemail-sent.js"></script>

</body>


</html>












