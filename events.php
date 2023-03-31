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
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Events</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas
                    sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <?php
                    $event = "SELECT * FROM events";
                    $query = mysqli_query($con, $event);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo "admin/img/" . $data['img'] ?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href=""><?php echo $data['title']; ?></a></h5>
                                <p class="fst-italic text-center"><?php echo $data['date']; ?></p>
                                <p class="card-text"><?php echo $data['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </section><!-- End Events Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('inc/footer.php'); ?>