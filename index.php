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
        style="background-image:url('<?php echo "admin/img/" . $data['img']; ?>'); background-repeat:no-repeat; background-position:center">
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
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <?Php
                            $fquery1 = "SELECT * FROM whychooseus";
                            $result1 = mysqli_query($con, $fquery1);
                            $data1 = $result1->fetch_assoc();
                            ?>
                            <h3><?php echo $data1['title']; ?></h3>
                            <p>
                                <?php echo $data1['description']; ?>
                            </p>
                            <div class="text-center">
                                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <?Php
                                $fquery1 = "SELECT * FROM services limit 4";
                                $result1 = mysqli_query($con, $fquery1);
                                while ($data1 = mysqli_fetch_array($result1)) {

                                ?>
                                <div class="col-xl-4 d-flex align-items-stretch py-2">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="<?php echo $data1['icon']; ?>"></i>
                                        <h4>
                                            <?php echo $data1['title']; ?>
                                        </h4>
                                        <p><?php echo $data1['description']; ?></p>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

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
                    $courses = "SELECT * FROM courses";
                    $courseResult = mysqli_query($con, $courses);
                    while ($cordata = mysqli_fetch_array($courseResult)) {
                    ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <img src="<?php echo "admin/img/" . $cordata['img'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4><?php echo $cordata['title']; ?></h4>
                                    <p class="price"><?php echo $cordata['fee']; ?></p>
                                </div>

                                <h3><a href="course-details.html"><?php echo $cordata['title']; ?></a></h3>
                                <p><?php echo $cordata['description']; ?></p>
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
                    <?php
                    $teachers = "SELECT * FROM teachers";
                    $teachResult = mysqli_query($con, $teachers);
                    while ($tedata = mysqli_fetch_array($teachResult)) {
                    ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="<?php echo "admin/img/" . $tedata['img']; ?>" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4><?php echo $tedata['name']; ?></h4>
                                <span><?php echo $tedata['post']; ?></span>
                                <p>
                                    <?php echo $tedata['description']; ?>
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
                    <?php
                    }
                    ?>
                </div>

            </div>
        </section><!-- End Trainers Section -->

    </main><!-- End #main -->

    <?php include("inc/footer.php") ?>