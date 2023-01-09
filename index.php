<?php
include("inc/header.php");
?>
<?php
include("./admin/connection/config.php");
?>

<body>

    <!-- ======= Header ======= -->
    <?php
    include("inc/navbar.php");

    ?>

    <!-- ======= Hero Section ======= -->
    <?php
    $query = "SELECT * FROM sliders";
    $result = mysqli_query($con, $query);
    $data = $result->fetch_assoc();
    ?>
    <section id="hero" class="d-flex justify-content-center align-items-center"
        style="background-image:url('<?php echo "admin/img/" . $data['img']; ?>')">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1><?php echo $data['title']; ?></h1>
            <h2><?php echo $data['description']; ?></h2>
            <a href="courses.html" class="btn-get-started">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <?php
            $aboutquery = "SELECT * FROM aboutus";
            $aboutresult = mysqli_query($con, $aboutquery);
            $adata = $aboutresult->fetch_assoc();
            ?>
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="<?php echo "admin/img/" . $adata['img']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3><?php echo $adata['title']; ?></h3>
                        <p class="fst-italic">
                            <?php echo $adata['description']; ?>
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">
                    <?php
                    $facts = "SELECT * FROM facts limit 4 ";
                    $fresult = mysqli_query($con, $facts);
                    while ($fdata = mysqli_fetch_array($fresult)) {
                    ?>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo $fdata['numbers']; ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><?php echo $fdata['title']; ?></p>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <?php
        $whyquery = "SELECT * FROM whychooseus";
        $whyresult = mysqli_query($con, $whyquery);
        $whydata = $whyresult->fetch_assoc();
        ?>
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3><?php echo $whydata['title']; ?></h3>
                            <p>
                                <?php echo $whydata['description']; ?>
                            </p>
                            <div class="text-center">
                                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch p-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <?php
                                $services = "SELECT * FROM services ";
                                $sresult = mysqli_query($con, $services);
                                while ($sdata = mysqli_fetch_array($sresult)) {
                                ?>
                                <div class="col-xl-4 d-flex align-items-stretch ">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="<?php echo $sdata['icon']; ?>"></i>
                                        <h4><?php echo $sdata['title']; ?></h4>
                                        <p><?php echo $sdata['description'] ?></p>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Facilities Section ======= -->
        <section id="facilities" class="facilities">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <?php
                    $fea = "SELECT * FROM facilities
                    ";
                    $fearesult = mysqli_query($con, $fea);
                    while ($feadata = mysqli_fetch_array($fearesult)) {
                    ?>
                    <div class="col-lg-3 col-md-4 mb-2">
                        <div class="icon-box">
                            <i class="<?php echo $feadata['icon']; ?>"></i>
                            <h3><a href=""><?php echo $feadata['title']; ?></a></h3>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </section><!-- End Facilities Section -->

        <!-- ======= Popular Courses Section ======= -->
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Courses</h2>
                    <p>Popular Courses</p>
                </div>

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <?php
                    $course = "SELECT * FROM courses";
                    $res = mysqli_query($con, $course);
                    while ($resdat = mysqli_fetch_array($res)) {
                    ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <img src="<?php echo "admin/img/" . $resdat['img']; ?>" class="img-fluid"
                                alt="wfertymngfbfd">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4><?php echo $resdat['title']; ?></h4>
                                    <p class="price"><?php echo $resdat['fee']; ?></p>
                                </div>

                                <h3><a href="course-details.html"><?php echo $resdat['title']; ?></a></h3>
                                <p><?php echo $resdat['description']; ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                        <span>Antonio</span>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <i class="bx bx-user"></i>&nbsp;50
                                        &nbsp;&nbsp;
                                        <i class="bx bx-heart"></i>&nbsp;65
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section><!-- End Popular Courses Section -->

        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Walter White</h4>
                                <span>Web Development</span>
                                <p>
                                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                    quaerat qui aut aut aut
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Sarah Jhinson</h4>
                                <span>Marketing</span>
                                <p>
                                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto
                                    rerum rerum temporibus
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>William Anderson</h4>
                                <span>Content</span>
                                <p>
                                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et
                                    laborum toro des clara
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Trainers Section -->

    </main><!-- End #main -->

    <?php include("inc/footer.php") ?>