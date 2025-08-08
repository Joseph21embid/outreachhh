<?php
include "qauth/solution.php";
echo $_SESSION["user_id"];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>

    <!-- Document Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="area.css">
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


            <a class="navbar-brand" href="../index.php">
                <img src="../images/black_logo.png" alt="Logo" width="30" height="30">
                <p>OUTREACH</p>
            </a>


            <div>
                <button class="btn logout" type="button">Log Out</button>
            </div>

        </div>
    </nav>

    <section class="home" style="position: relative; overflow: hidden;">


        <!-- Imput checkbox inside form -->
        <form action="" method="post" class="container mt-5 p-4 rounded shadow bg-light" style="max-width: 700px;">
            <div class="header">
                <h1 class="mb-4">Select <span>Speciality</span></h1>
            </div>
            <hr>
            <?php
            // Fetch all problems from DB
            $problems = $conn->query("SELECT id, issues FROM problems");
            ?>

            <div class="mb-4">
                <label class="form-label fw-bold">What problems can you help with?</label>

                <div class="row">
                    <?php while ($issues = $problems->fetch_assoc()): ?>
                        <div class="col-md-6"">
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
                    <p class="text-danger mt-1 t"><?php echo $errors['problems']; ?></p>
            </div>

            <button type="submit" name="special" class="submit_btn btn btn-primary w-100">
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