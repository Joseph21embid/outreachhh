<?php
include "qauth/questionnaire.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>

    <!-- Document Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="question.css">
    <link rel="icon" href="../images/white_logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>

<body>



    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">


            <a class="navbar-brand" href="#">
                <img src="../images/black_logo.png" alt="Logo" width="30" height="30">
                <p>OUTREACH</p>
            </a>



            <div>
                <button class="btn logout" type="button">Log Out</button>
            </div>

        </div>
    </nav>


    <div id="ripple-effect"></div>

    <section class="home" style="position: relative; overflow: hidden;">
        <div class="hands">
            <div class="white"></div>
            <img src="images/hands1.png" alt="">
        </div>


        <form method="post" action="" enctype="multipart/form-data" class="container mt-5 p-4 rounded shadow bg-light" style="max-width: 700px;">
            <div class=" header">
                <h1 class="mb-4"> Outreach <span>Questionnaire</span></h1>
            </div>

            <hr>

            <!-- Basic Info -->
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>

            <div class="row mb-3">
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required value=" <?php echo $_SESSION["email"] ?>" readonly >
                </div>

                <div class="mb-3 col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country of Residence</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>

            <!-- Qualification -->
            <div class="row mb-3">
                <div class="mb-3 col-md-6">
                    <label for="qualification" class="form-label">Highest Qualification</label>
                    <select class="form-select" id="qualification" name="qualification" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="bsc">BSc</option>
                        <option value="msc">MSc</option>
                        <option value="bphdsc">PhD</option>
                        <option value="other">Other</option>
                    </select>
                    <p style="color: red;"> <?php echo $errors["qualification"] ?> </p>
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Are you licensed?</label>
                    <select class="form-select" name="licensed" required>
                        <option selected disabled value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <p style="color: red;"> <?php echo $errors["licensed"] ?> </p>
                </div>
            </div>



            <div class="mb-5">
                <label for="licenseUpload" class="form-label">Upload Certificate (optional) </label>
                <input class="form-control" type="file" id="licenseUpload" name="licenseUpload" accept=".jpg,.png,.pdf">
                <p style="color: red;"> <?php echo $errors["upload"] ?> </p>
            </div>


            <!-- Motivation -->
            <div class="mb-3">
                <label for="motivation" class="form-label">Why do you want to volunteer with Outreach?</label>
                <textarea class="form-control" id="motivation" name="motivation" rows="3" required placeholder="What is your motivation..."></textarea>
                <p style="color: red;"> <?php echo $errors["motivation"] ?> </p>
            </div>

            <div class="mb-3">
                <label class="form-label">Have you ever been disciplined for misconduct?</label>
                <select class="form-select" name="misconduct" required>
                    <option selected disabled value="">Select</option>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                    <p style="color: red;"> <?php echo $errors["misconduct"] ?> </p>
                </select>
            </div>


            <!-- Consent -->
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" id="agree" required>
                <label class="form-check-label" for="agree">
                    I agree to Outreach’s code of ethics and confidentiality policy.
                </label>
            </div>

            <div class="mb-3">
                <label for="signature" class="form-label">Signature (Typed Full Name)</label>
                <input type="text" class="form-control" id="signature" name="signature" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100 submit_btn">
                Submit Application
                <span class="material-symbols-outlined">keyboard_capslock</span>
            </button>
        </form>

    </section>


    <footer class=" py-5">
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
    </footer>


</body>

</html>