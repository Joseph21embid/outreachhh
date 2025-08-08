<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTREACH</title>

    <!-- Document Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="images/white_logo.png" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Swiper CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



</head>

<body>

    

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
        <div class="container d-flex align-items-center">

            <!-- Left: Logo -->
            <div class="flex-grow-1 d-flex align-items-center justify-content-start">
                <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                    <img src="images/black_logo.png" alt="Logo" width="30" height="30">
                    <p class="mb-0 d-block">OUTREACH</p>
                </a>
            </div>
            

            <!-- Center: Urgent button (in flow, no shifting) -->
            <!-- <div class="d-flex flex-grow-1 justify-content-center">
                
            </div> -->

            <!-- Right: Nav toggler and collapsed content -->
            <div class="flex-grow-1 d-flex justify-content-end align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Collapsible Nav -->
            <div class="collapse navbar-collapse flex-grow-1 justify-content-end align-items-center mt-3 mt-lg-0" id="navbarNavDropdown">
                <div class="d-flex flex-column flex-lg-row gap-2 w-lg-auto">
                    <button class="btn login w-md-100 " id="loginBtn">Login</button>
                    <button class="btn signup w-md-100 " id="registerBtn">Sign Up</button>
                </div>
            </div>



        </div>
    </nav>



    
    


    <!-- signup modal -->
    <div class="login_modal" id="loginModal">

        <div class="modal_content">
            <div class="as_professional">
                <img src="images/voice.png" alt="">
                <a href="plogin.php">Login in as Voice</a>
            </div>
            <hr>
            <div class="as_student">
                <img src="images//listener.png" alt="">
                <a href="tlogin.php">Login in as Therapist</a>
            </div>
        </div>
        
    </div>

    <!-- login modal -->
    <div class="register_modal" id="registerModal">

        <div class="modal_content">
            <div class="as_school">
                <img src="images/voice.png" alt="">
                <a href="psignup.php">Sign up as Voice</a>
            </div>
            <hr>
            <div class="as_professional">
                <img src="images/listener.png" alt="">
                <a href="tsignup.php">Sign up as Therapist</a>
            </div>
        </div>
        
    </div>
    

    <section class="home" style="position: relative; overflow: hidden;">


        <div id="ripple-effect"></div>


        <div class="hands">
            <div class="white"></div>
            <img src="images/hands1.png" alt="">
        </div>

        <div class="mobile-circles circle1"></div>

        <div class="mobile-circles circle2"></div>

        

        <div class="content">
            <div class="cont">
                <div class="tag">
                    <span class="material-symbols-outlined">psychiatry</span>
                    <p>Inspiring Hope • Healing Hearts</p>
                </div>
                
                <div>
                    <h1 class="fade-item delay-2">You’ve <span class="c1" style="color: #0ea5e9;">Held</span> It In Long <span class="c2" style="color: #db2777;">Enough</span>.</h1>
                </div>
            </div>
            

            <p class="fade-item delay-3 des">
                In the quiet moments of struggle, a kind voice can change everything. <br>
                Outreach is your space to share, reflect, and begin again<br>
                in your own words, at your own pace.
            </p>

            <div class="home_buttons fade-item delay-4">

                <a href="#mission" class="connect fade-r">
                    <span class="material-symbols-outlined">explore</span>
                    Explore
                </a>

                <a href="plogin.php" class="btn urgent" id="urgentBtn" type="button">
                    <span class="material-symbols-outlined">call</span>
                    <p>Talk to Someone</p>
                </a>

            </div>
        </div>

        <div class="down_btn">
            <span class="material-symbols-outlined">vertical_align_bottom</span>
        </div>

    </section>



    <section class="mission" id="mission">
        <div class="mission-cont">

            <div class="col-6 info" data-animate="slide-left">
                <div class="tag">
                    <span class="material-symbols-outlined">shield</span>
                    <p>Trusted • Professional • Compassionate</p>
                </div>

                <h1>Our <span>Mission</span></h1>
                <p class="description">
                    To provide a safe, accessible, and confidential space where individuals facing emotional distress can connect with compassionate listeners and qualified therapists; anytime, anywhere.
                </p>

                <div class="stat">
                    <div data-animate="fade-up">
                        <div class="circle-bg1">
                            <span class="material-symbols-outlined SI1">check_circle</span>
                        </div>
                        <p>Qualified mental health professionals</p>
                    </div>

                    <div data-animate="fade-up">
                        <div class="circle-bg2">
                            <span class="material-symbols-outlined SI2">schedule</span>
                        </div>
                        <p>24/7 crisis support and guidance</p>
                    </div>

                    <div data-animate="fade-up">
                        <div class="circle-bg3">
                            <span class="material-symbols-outlined SI3">psychiatry</span>
                        </div>
                        <p>Personalized healing approaches</p>
                    </div>

                    <div data-animate="fade-up">
                        <div class="circle-bg4">
                            <span class="material-symbols-outlined SI4">encrypted</span>
                        </div>
                        <p>Confidential and secure support</p>
                    </div>
                </div>
            </div>

            <div class="col-6 mission-img-cont" data-animate="slide-right">
                <img src="images/mission.png" alt="" />
            </div>

        </div>
    </section>



    <section class="vision">
        <div class="vision-cont">

            <!-- Image column: slide in from left -->
            <div class="col-6 vision-img-cont" data-animate="slide-left">
                <img src="images/confrence.png" alt="">
            </div>

            <!-- Info column: slide in from right -->
            <div class="col-6 info" data-animate="slide-right">
                <div class="tag">
                    <span class="material-symbols-outlined">lightbulb_2</span>
                    <p>Inclusive • Impact-Driven • Future-Focused</p>
                </div>

                <h1>Our <span>Vision</span></h1>
                <p class="description">To become the leading digital sanctuary for mental well-being in Africa; a place where no one feels alone, unheard, or ashamed to seek help.</p>

                <div class="stat">
                    <div data-animate="fade-up">
                        <div class="circle-bg1">
                            <span class="material-symbols-outlined SI1">accessibility</span>
                        </div>
                        <p>Accessible mental health care across Africa</p>
                    </div>

                    <div data-animate="fade-up">
                        <div class="circle-bg2">
                            <span class="material-symbols-outlined SI2">volunteer_activism</span>
                        </div>
                        <p>Empowering communities through empathy</p>
                    </div>

                    <div data-animate="fade-up">
                        <div class="circle-bg3">
                            <span class="material-symbols-outlined SI3">network_intel_node</span>
                        </div>
                        <p>Innovation-driven mental wellness tools</p>
                    </div>

                    <div data-animate="fade-up">
                        <div class="circle-bg4">
                            <span class="material-symbols-outlined SI4">safety_divider</span>
                        </div>
                        <p>A safe space built on trust and dignity</p>
                    </div>

                </div>
            </div>

        </div>
    </section>



    

    <section class="partner-slider container-fluid px-0">
        <img src="images/cloud_part.png" alt="" class="cloud_part">
        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
                <!-- Each logo inside a swiper-slide -->
                <div class="swiper-slide"><img src="images/partners/capitis-logo.0fdb9306.svg" alt="Partner 1"></div>
                <div class="swiper-slide"><img src="images/partners/enugu-sme-logo.88c278f3.svg" alt="Partner 2"></div>
                <div class="swiper-slide"><img src="images/partners/esg-logo.5e44c702.svg" alt="Partner 3"></div>
                <div class="swiper-slide"><img src="images/partners/genesys-logo.df6b6556.svg" alt="Partner 4"></div>
                <div class="swiper-slide"><img src="images/partners/ode-logo.68d565cf.svg" alt="Partner 5"></div>
                <div class="swiper-slide"><img src="images/partners/peter-mbah-logo.f77990af.svg" alt="Partner 6"></div>
                <div class="swiper-slide"><img src="images/partners/the-garage-logo.9cd53ada.svg" alt="Partner 7"></div>
                <!-- You can duplicate logos for smoother loop -->
            </div>
        </div>
    </section>


    <section class="services">
        <div class="tag"  data-animate="fade-up">
            <span class="material-symbols-outlined">heart_check</span>
            <p>How We Support Your Journey</p>
        </div>
        <h1 data-animate="fade-up">Pathways to <span>Healing</span></h1>
        <h6 data-animate="fade-up">Discover the support that's right for you. Our comprehensive services are designed to meet you exactly where you are.</h6>

        <div class="container p-5">
            <div class="d-flex flex-wrap justify-content-between gap-4">
                
                <div class="case-box bg-light text-center p-4" data-animate="fade-up">
                    <img src="images/private.png" alt="">
                    <h3>Private Therapy Sessions</h3>

                    <p>
                        Connect with trained mental health professionals through your preferred method — secure chat, private audio calls, or
                        <span id="dots">...</span>
                        <span id="extraWrapper">
                            <span id="extra"> face-to-face video sessions. Whether you want to write it out or talk it through, we meet you where you’re most comfortable.</span>
                        </span>
                    </p>
                    <button class="service_btn" id="privateLearn">Learn More</button>
                    <button class="service_btn" id="privateClose">Close</button>
                </div>

                <div class="case-box bg-light text-center p-4" data-animate="fade-up">
                    <img src="images/247.png" alt="">
                    <h3>24/7 Emotional Support</h3>
                    <p>
                        Emotions don’t follow a 9-to-5. That’s why we’re here day and night, ready to support you through 
                        <span id="dots2">...</span>
                        <span id="extraWrapper2">
                            <span id="extra"> anxiety, sadness, overwhelm, or anything else. Reach out whenever you need to. We’re always listening.</span>
                        </span>
                    </p>

                    <button class="service_btn" id="all_day">Learn More</button>
                    <button class="service_btn" id="all-dayClose">Close</button>
                </div>

                <div class="case-box bg-light text-center p-4" data-animate="fade-up">
                    <img src="images/anonymous.png" alt="">
                    <h3>Total Anonymity</h3>
                    <p>
                        We understand that safety and privacy are everything. That’s why you can share openly — no names, 
                        <span id="dots3">...</span>
                        <span id="extraWrapper3">
                            <span id="extra"> no pressure. Your identity stays protected, and your voice is heard with compassion, not judgment</span>
                        </span>
                    </p>

                    <button class="service_btn" id="anonymous">Learn More</button>
                    <button class="service_btn" id="anonymousClose">Close</button>
                </div>

            </div>
        </div>

    </section>


    <section class="review">

        <div class="tag">
            <span class="material-symbols-outlined">person_heart</span>
            <p>What motivates us</p>
        </div>
        <h1>Stories That <span>Inspire</span></h1>
        <p class="review_des">Every conversation makes a difference. Hear from the Voices who found hope, comfort, and healing, and from the Listeners who offered their time and compassion.</p>

        <div class="review_cont">
            
            <div class="reviews-track">
                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                    
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>
            </div>

            
        </div>
        
    </section>



    <section class="faq" id="faq">
        
        <div class="text-center mb-5 intro">
            <h2 class="header">Frequently <span>Asked</span> Questions</h2>
            <p class="">Everything you need to know about using Outreach</p>
        </div>

        <div class="accordion" id="faqAccordion">
            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        Is Outreach really anonymous?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. You can chat, call, or receive support without ever revealing your name or personal details.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        How do I talk to someone?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Simply sign in as a Voice and you'll be connected to a Therapist for a secure chat or call, all within seconds.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        What if I feel uncomfortable during a session?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You’re in full control. You can end the session or switch to a different Therapist whenever you like.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        Is Outreach free to use?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, urgent cases like suicide are prioritized. You get three free 2-hour sessions, then can retain a therapist for an agreed fee.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        How do I become a Therapist?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Apply through our platform. You’ll go through a short screening and training process before you can support Voices.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                        Can I stay anonymous during voice or video calls?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely. You can opt for audio-only calls and are never required to show your face or reveal your identity.
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="news">

        <div class="container">
            <div class="row main_case">
                <div class="col-12 col-md-5" data-animate="slide-left">
                    <h1>Heal <span>Differently</span>.</h1>
                    <p>Sign up for all our laters News, tips, updates & releases</p>
                </div>

                <div class="col-12 col-md-7">
                    <div data-animate="slide-right">

                        <div class="input_div">
                            <input type="email" name="newsletter" placeholder="Email...">
                            <button type="submit" name="news_submit" class="arrow">
                                <span class="material-symbols-outlined ">keyboard_tab</span>
                            </button>
                        </div>
                        <p>Managed in accordance with the <a href="">Privacy Policy</a>, You can Unsubscribe at any time</p>
                        
                    </div>
                </div>
            </div>
        </div>

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
                    <p>Contact us via our Socials.</p>
                    <div>
                        <div class="socials">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                </svg>
                            </a>
                            
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                </svg>
                            </a>

                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                </svg>
                            </a>

                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                </svg>
                            </a>
                            
                        </div>

                    
                    </div>
                </div>
            </div>
            <hr class="mt-4">
            <p class="text-center mb-0">&copy; 2025 Outreach. All rights reserved. Your mental health matters. You are not alone.</p>
        </div>
    </footer>



    


    <!-- External libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    

    <!-- Your custom script -->
    <script src="assets/js/script.js"></script>


</body>

</html>
