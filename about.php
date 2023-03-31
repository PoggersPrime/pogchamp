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

    <main id="main">
        <?php
        $aboutquery = "SELECT * FROM aboutus";
        $aboutresult = mysqli_query($con, $aboutquery);
        $adata = $aboutresult->fetch_assoc();
        ?>
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2><?php echo $adata['top_title']; ?></h2>
                <p><?php echo $adata['top_desc']; ?> </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
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

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What are they saying</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <?php
                        $testimonials = "SELECT * FROM testimonials ";
                        $testiesult = mysqli_query($con, $testimonials);
                        while ($tdata = mysqli_fetch_array($testiesult)) {
                        ?>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="<?php echo "admin/img/" . $tdata['img'] ?>" class="testimonial-img"
                                        alt="">
                                    <h3><?php echo $tdata['name']; ?></h3>
                                    <h4><?php echo $tdata['post']; ?></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        <?php echo $tdata['messages']; ?>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <?php
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <?php
    include("inc/footer.php");
    ?>