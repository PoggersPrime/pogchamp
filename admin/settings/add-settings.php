<?php include("../inc/header.php"); ?>

<body>

    <!-- ======= Header ======= -->
    <?php include("../inc/navbar.php"); ?>

    <!-- ======= Sidebar ======= -->
    <?php include("../inc/sidebar.php"); ?>
    <?php include("../connection/config.php"); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                    <li class="breadcrumb-item active">add-settings</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add settings</h5>
                        <?php
                        if (isset($_POST['submit'])) {
                            $site_key  = $_POST['site_key'];
                            $site_value = $_POST['site_value'];

                            if ($site_key != "" && $site_value  != "") {
                                $query = "INSERT INTO settings (site_key,site_value) VALUES ('$site_key','$site_value')";
                                $result = mysqli_query($con, $query);

                                if ($result) {
                        ?>
                                    <div class="alert alert-success" role="alert">
                                        Data submitted succesfully
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        Data not inserted
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    Data not submitted
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Site_key </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="site_key">
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Site_value</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="site_value">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include("../inc/footer.php"); ?>