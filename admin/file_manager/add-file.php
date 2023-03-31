<?php include("../inc/header.php"); ?>

<body>

    <!-- ======= Header ======= -->
    <?php include("../inc/navbar.php"); ?>

    <!-- ======= Sidebar ======= -->
    <?php include("../inc/sidebar.php"); ?>
    <?php include("../connection/config.php"); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add File</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                    <li class="breadcrumb-item active">add-file</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add file</h5>
                        <?php
                        if (isset($_POST['submit'])) {
                            $title = $_POST['title'];
                            $description = $_POST['description'];
                            $filename = $_FILES['dataFile']['name'];
                            $filesize = $_FILES['dataFile']['size'];
                            // name ra extention(.exe) lai xutauni kam 
                            $explode = explode('.', $filename);
                            // lower case banauna
                            $firstname = strtolower($explode[0]);
                            $ext = strtolower($explode[1]);
                            // for removing sapce
                            $rep = str_replace(' ', '', $filename);
                            // connecting all peices 
                            $finalname = $rep . time() . '.' . $ext;
                            if ($filesize >= 20000) {
                                if ($ext == "png" || $ext == "jpg" || $ext == "jpeg") {
                                    if (move_uploaded_file($_FILES['dataFile']['tmp_name'], '../img/' . $finalname)) {
                                        $query = "INSERT INTO files (title,filelink,type,description) VALUES ('$title','$finalname','$ext','$description')";
                                        $result = mysqli_query($con, $query);
                                        if ($result) {
                        ?>
                        <div class="alert alert-warning" role="alert">
                            File is submitted
                        </div>
                        <?php
                                        } else {
                                        ?>
                        <div class="alert alert-warning" role="alert">
                            error
                        </div>
                        <?php
                                        }
                                    } else {
                                        ?>
                        <div class="alert alert-warning" role="alert">
                            File is not uploded
                        </div>
                        <?php
                                    }
                                } else {
                                    ?>
                        <div class="alert alert-warning" role="alert">
                            File ext not matched
                        </div>
                        <?php
                                }
                            } else {
                                echo "error";
                            }
                        }
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="dataFile"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="description"></textarea>
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