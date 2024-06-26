<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <?php
        $query = "SELECT *FROM settings";
        $result = mysqli_query($con, $query);
        // $data= $result->fetch_all();
        while ($site = $result->fetch_assoc()) {
            if ($site['site_key'] == "logo") {
                $logo = $site['site_value'];
            }

            // yastai aru declare garne
        }
        ?>
        <h1 class="logo me-auto"><a href="index.php"><img src="admin/img/<?php echo $logo; ?>" alt="" width="70" height="50"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="trainers.php">Trainers</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="pricing.php">Pricing</a></li>

                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
</header><!-- End Header -->