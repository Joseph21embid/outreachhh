<?php include "auth/login.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- Documents Links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/tlogin.css">
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
                Don't have a account? <a href="psignup.php">Join Community</a>
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
            <h1>Welcome back<span class="text-span">.</span> </h1>
            <p class="intro">Your presence makes a difference. Sign in to support those who need to be heard.</p>

            <form action="" method="post" class=" w-100 w-md-75 w-lg-50 p-4">
                <div class="mb-3 email_div col-12 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    
                    <div class="input-wrapper">
                        <input type="email" name="email" placeholder="Enter email" class="form-control" required>
                        <span class="material-symbols-outlined mail_icon">mail</span>
                    </div>

                    <p style="color: red;"><?php echo $errors["email"] ?></p>
                </div>

                <div class="mb-3 password_div col-12 col-md-6">
                    <label for="password" class="form-label">Password</label>
                    
                    <div class="input-wrapper">
                        <input type="password" name="pass" placeholder="Enter Password" class="form-control" id="password" required>
                        <span class="eye-icon fas fa-eye-slash" id="togglePassword"></span> 
                    </div>

                    <p style="color: red;"><?php echo $errors["pass"] ?></p>
                </div>

                <a class="forgot" href="pforgot_password.php">Forgot Password?</a>

                <div class="d-grid mt-3 col-12 col-md-6">
                    <input type="submit" class="btn btn-primary submit" name="t_submit" value="Reconnect Now">
                </div>

            </form>

            <div class="lines">
                <div class="line"></div>
                <p>or sign in with</p>
                <div class="line"></div>
            </div>

            <div class="sign_option">

                <button class="google options">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                    </svg>
                    <p>Google</p>
                </button>

                <button class="apple options">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                        <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
                        <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
                    </svg>
                    <p>Apple</p>
                </button>


            </div>

            <p class="no_acc2">
                Don't have a account? <a href="tsignup.php">Join Community</a>
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
    <script src="assets/js/tlogin.js"></script>

</body>


</html>