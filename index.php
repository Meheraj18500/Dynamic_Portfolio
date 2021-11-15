<?php include "admin/includes/db_connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Krozo - Portfolio template</title>
    <!-- Thimify icon css -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Css grid System -->
    <link rel="stylesheet" href="css/my-grid.css">
    <!-- Main css file -->
    <link rel="stylesheet" href="css/style.css">
</head>
                    
<body>
    <!-------------------- Header Start -------------------->
    <header id="home">
        <nav>
            <div class="container">
                <div class="navbar">
                    <a href="#home" class="logo">
                        <h3>Krozo</h3>
                    </a>
                    <ul class="menu">
                        <li class="menu-item"><a href="#home" class="active">Home</a></li>
                        <li class="menu-item"><a href="#about-us">About us</a></li>
                        <li class="menu-item"><a href="#services">Services</a></li>
                        <li class="menu-item"><a href="#portfolio">Portfolio</a></li>
                        <li class="menu-item"><a href="#blog">Blog</a></li>
                        <li class="menu-item"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero-section">
            <div class="hero-overlay">
                <div class="container">
                    <div class="hero-content">
                        <h5>Hi There, I'm</h5>
                        <h2>Meheraj Hossain</h2>
                        <h3>Freelance Developer</h3>
                    </div>
                </div>
                <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="ti-linkedin"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-------------------- Header End -------------------->

    <!-------------------- About us Start -------------------->
    <section class="about-us ptb-115" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col col-6">
                    <div class="image-box">
                        <img src="img/my-photojpg.jpg" alt="">
                    </div>
                </div>
                <div class="col col-6">
                    <div class="contact-content">
                        <h3>Meheraj Hossain</h3>
                        <h5>Freelance Designer</h5>
                        <p class="description">I design and develop services for customers of all sizes, modern
                            websites, web services and online stores.</p>
                        <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="javascript:void(0)" class="btn about-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------- About us End -------------------->

    <!-------------------- Services Start -------------------->
    <section class="services ptb-115 bg-2" id="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section-header">My services</h3>
                    <p class="section-description">I design and develop services for customers of all sizes,
                        specializing in creating stylish, modern websites, web services and online stores.</p>
                </div>
            </div>
            <div class="row pt-50">
                <div class="col col-4">
                    <div class="card">
                        <div class="icon">
                            <i class="ti-ruler-pencil"></i>
                        </div>
                        <div class="content">
                            <h3 class="card-header">Development</h3>
                            <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="icon">
                            <i class="ti-image"></i>
                        </div>
                        <div class="content">
                            <h3 class="card-header">Development</h3>
                            <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="icon">
                            <i class="ti-layout"></i>
                        </div>
                        <div class="content">
                            <h3 class="card-header">Development</h3>
                            <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-30">
                <div class="col col-4">
                    <div class="card">
                        <div class="icon">
                            <i class="ti-world"></i>
                        </div>
                        <div class="content">
                            <h3 class="card-header">Development</h3>
                            <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="icon">
                            <i class="ti-camera"></i>
                        </div>
                        <div class="content">
                            <h3 class="card-header">Development</h3>
                            <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="icon">
                            <i class="ti-brush-alt"></i>
                        </div>
                        <div class="content">
                            <h3 class="card-header">Development</h3>
                            <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------- Services End -------------------->

    <!-------------------- Skils Start -------------------->
    <section class="skils ptb-115" id="skils">
        <div class="container">
            <div class="row">
                <div class="col col-4">
                    <h3 class="sub-header">Education</h3>
                    <div class="education card">
                        <div class="education-item box">
                            <p class="date">2010-2016</p>
                            <h3 class="titel">Graphic Designer</h3>
                            <p class="little-description">International Design Institute</p>
                        </div>
                        <div class="education-item box">
                            <p class="date">2010-2016</p>
                            <h3 class="titel">Graphic Designer</h3>
                            <p class="little-description">International Design Institute</p>
                        </div>
                        <div class="education-item box">
                            <p class="date">2010-2016</p>
                            <h3 class="titel">Graphic Designer</h3>
                            <p class="little-description">International Design Institute</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <h3 class="sub-header">Experience</h3>
                    <div class="experience card">
                        <div class="experience-item box">
                            <p class="date">2010-2016</p>
                            <h3 class="titel">Graphic Designer</h3>
                            <p class="little-description">International Design Institute</p>
                        </div>
                        <div class="experience-item box">
                            <p class="date">2010-2016</p>
                            <h3 class="titel">Graphic Designer</h3>
                            <p class="little-description">International Design Institute</p>
                        </div>
                        <div class="experience-item box">
                            <p class="date">2010-2016</p>
                            <h3 class="titel">Graphic Designer</h3>
                            <p class="little-description">International Design Institute</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <h3 class="sub-header">Skils</h3>
                    <div class="my-skils card">
                        <div class="skil-item">
                            <h3>html5</h3>
                            <div class="skil-bar">
                                <div class="progress" style="width: 85%;" data-progress="85%"></div>
                            </div>
                        </div>
                        <div class="skil-item">
                            <h3>css3</h3>
                            <div class="skil-bar">
                                <div class="progress" style="width: 80%;" data-progress="80%"></div>
                            </div>
                        </div>
                        <div class="skil-item">
                            <h3>bootstrap</h3>
                            <div class="skil-bar">
                                <div class="progress" style="width: 60%;" data-progress="60%"></div>
                            </div>
                        </div>
                        <div class="skil-item">
                            <h3>javascript</h3>
                            <div class="skil-bar">
                                <div class="progress" style="width: 25%;" data-progress="25%"></div>
                            </div>
                        </div>
                        <div class="skil-item">
                            <h3>wordpress</h3>
                            <div class="skil-bar">
                                <div class="progress" style="width: 45%;" data-progress="45%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------- Skils End -------------------->

    <!-------------------- Portfolio Start -------------------->
    <section class="portfolio ptb-115 bg-2" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section-header">My portfolio</h3>
                    <p class="section-description">I design and develop services for customers of all sizes,
                        specializing in creating stylish, modern websites, web services and online stores.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="portfolio-filter">
                        <li><a href="javascript:void(0)" class="active">All</a></li>
                        <li><a href="javascript:void(0)">Branding</a></li>
                        <li><a href="javascript:void(0)">Photoshop</a></li>
                        <li><a href="javascript:void(0)">Fashion</a></li>
                        <li><a href="javascript:void(0)">Product</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col col-4">
                    <div class="card">
                        <div class="card-text">
                            <h4>Momb ios App</h4>
                            <p class="little-description">Broadcasting ios App</p>
                        </div>
                        <div class="card-img">
                            <img src="img/portfolio-3.jpg" alt="portfolio">
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="card-text">
                            <h4>Momb ios App</h4>
                            <p class="little-description">Broadcasting ios App</p>
                        </div>
                        <div class="card-img">
                            <img src="img/portfolio-2.jpg" alt="portfolio">
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="card-text">
                            <h4>Momb ios App</h4>
                            <p class="little-description">Broadcasting ios App</p>
                        </div>
                        <div class="card-img">
                            <img src="img/portfolio-6.jpg" alt="portfolio">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-30">
                <div class="col col-4">
                    <div class="card">
                        <div class="card-text">
                            <h4>Momb ios App</h4>
                            <p class="little-description">Broadcasting ios App</p>
                        </div>
                        <div class="card-img">
                            <img src="img/portfolio-4.jpg" alt="portfolio">
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="card-text">
                            <h4>Momb ios App</h4>
                            <p class="little-description">Broadcasting ios App</p>
                        </div>
                        <div class="card-img">
                            <img src="img/portfolio-5.jpg" alt="portfolio">
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card">
                        <div class="card-text">
                            <h4>Momb ios App</h4>
                            <p class="little-description">Broadcasting ios App</p>
                        </div>
                        <div class="card-img">
                            <img src="img/portfolio-1.jpg" alt="portfolio">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------- Portfolio End -------------------->

    <!-------------------- Testimonial Start -------------------->
    <section class="testimonial ptb-115" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col col-6">
                    <div class="byer-box">
                        <div class="byer-img">
                            <img src="img/team-2.jpg" alt="byer">
                        </div>
                        <div class="byer-text">
                            <div class="byer-feedback little-description">I design and develop services for customers of
                                all sizes, specializing in creating stylish, modern websites, web services and online
                                stores.</div>
                            <h4 class="byer-name">Md Meheraj</h4>
                            <div class="byer-rating">
                                <i class="ti-star"></i>
                                <div class="conunter">5.0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-6">
                    <div class="byer-box">
                        <div class="byer-img">
                            <img src="img/team-2.jpg" alt="byer">
                        </div>
                        <div class="byer-text">
                            <div class="byer-feedback little-description">I design and develop services for customers of
                                all sizes, specializing in creating stylish, modern websites, web services and online
                                stores.</div>
                            <h4 class="byer-name">Md Meheraj</h4>
                            <div class="byer-rating">
                                <i class="ti-star"></i>
                                <div class="conunter">5.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------- Testimonial End -------------------->

    <!-------------------- Blog Start -------------------->
    <section class="blog ptb-115 bg-2" id="blog">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section-header">Recent articles</h3>
                    <p class="section-description">I design and develop services for customers of all sizes,
                        specializing in creating stylish, modern websites, web services and online stores.</p>
                </div>
            </div>
            <div class="row pt-50">

                <?php
                    // Query
                    $query = "SELECT * FROM post";
                    $post = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_assoc($post)){
                        // $id          = $row['id'];
                        $title       = $row['title'];
                        $description = $row['description'];
                        $image       = $row['image'];
                        $day         = $row['day'];
                        $month       = $row['month'];
                
                ?>

                <div class="col col-4">
                    <div class="card">
                        <div class="icon">
                            <div class="card-img">
                                <img src="img/blog-3.jpg" alt="blog">
                                <div class="date">
                                    <h4>04</h4>
                                    <p class="little-description">MAR</p>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="card-header"><?php read_more($title, 8); ?></h3>
                                <p class="little-description"><?php read_more($description, 10); ?></p>
                                <a href="javascript:void(0)" class="read-more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>


            </div>
        </div>
    </section>
    <!-------------------- Blog End -------------------->

    <!-------------------- Contact Start -------------------->
    <section class="contact ptb-115" id="contact">
        <div class="container">
            <div class="row">
                <div class="col col-6">
                    <div class="contact-box">

                        <?php  
                            // if (isset($_POST['submit'])) {
                                                            
                            //     $name = $_POST['name'];
                            //     $email = $_POST['email'];
                            //     $subject = $_POST['subject'];
                            //     $message = $_POST['message'];
                                

                            //     $query = "INSERT INTO contact(`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')";
                            //     $insert_message = mysqli_query($connect, $query);
                            //     if (!$insert_message) {
                            //         die("Message Faild" . mysqli_error($connect));
                            //     }else{
                            //         // header("Location: index.php");
                            //     }
                            // }
                        ?>
                      
                        <form action="contact_submit.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <h5 class="sub-header">Contact Us</h5>
                                </div>
                                <div class="col col-6">
                                    <input name="name" type="text" placeholder="Name" class="form-comtrol" required>
                                </div>
                                <div class="col col-6">
                                    <input name="email" type="email" placeholder="Email" class="form-comtrol" required>
                                </div>
                                <div class="col">
                                    <input name="subject" type="text" placeholder="Subject" class="form-comtrol" required>
                                </div>
                                <div class="col">
                                    <textarea name="message" placeholder="Message" class="form-comtrol" required></textarea>
                                </div>
                                <div class="col">
                                    <input type="submit" name="submit" class="btn contact-btn" value="Send Your Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-6">
                    <div class="address-box">
                        <div class="row">
                            <div class="col">
                                <h5 class="sub-header">get in touch</h5>
                                <p class="address-text">Always available for freelancing if the right project comes
                                    along, Feel free to contact me.</p>
                            </div>
                            <div class="col">
                                <div class="box">
                                    <div class="icon">
                                        <i class="ti-map"></i>
                                    </div>
                                    <div class="text">
                                        <p class="address">123 Stree New York City, United States Of America NY 750065.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box">
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="text">
                                        <p>mdmeheraj185@gmail.com</p>
                                        <p>mdmeheraj185@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box">
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="text">
                                        <p>01633012992</p>
                                        <p>01633012992</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------- Contact End -------------------->

    <!-------------------- Copyright -------------------->
    <footer class="copyright">
        <div class="container">
            <div class="footer-content">
                <div class="widget">
                    <ul class="social-icon">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="widget">
                    <p>&copy; 2021-copyright all right Designer | Meheraj</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>