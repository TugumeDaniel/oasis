<?php
    session_start();
    if(isset($_SESSION['uid'])){
        $uid=$_SESSION['uid'];
    }
    else{
        header("Location:login.html");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blogs - Oasis</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Oasis</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="blogs.html">BLOGS</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.html">PROJECTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="teams.html">TEAMS</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html">PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.html">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <body>
        <section class="bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase section-heading">BLOGS</h2>
                        <h3 class="text-muted section-subheading">You can learn about almost anything, there are blogs of everything. This is where we share knowlegde.<br>
                        <a class="btn btn-primary btn-xl text-uppercase" role="button" href="new_blog.html">New Blog</a></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal1" data-bs-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/1-thumbnail.jpg">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Fashion and Design</h4>
                            <p class="text-muted">All you need to know about textile</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal2" data-bs-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/2-thumbnail.jpg">
                        </a>
                        <div class="portfolio-caption">
                            <h4>A tour to Kenya</h4>
                            <p class="text-muted">Your guide on a tour to Kenya</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal3" data-bs-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/3-thumbnail.jpg">
                        </a>
                        <div class="portfolio-caption">
                            <h4>The Genesis of Tools</h4>
                            <p class="text-muted">Where do the tools we use come from? Explorer tool creation with us.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal4" data-bs-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/4-thumbnail.jpg">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Professional Ethics</h4>
                            <p class="text-muted">Learn what the real professional do, and become one of them.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal5" data-bs-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/5-thumbnail.jpg">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Smart Glasses</h4>
                            <p class="text-muted">Everything is becoming smart, come and explorer smart eyes with us.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal6" data-bs-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/6-thumbnail.jpg">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Mobile Development</h4>
                            <p class="text-muted">Learn to handle anything with the "swipe" of a fingure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><span class="copyright">Copyright © Oasis 2022</span></div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>
    
</html>