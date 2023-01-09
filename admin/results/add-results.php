<?php include("../inc/header.php"); ?>

<body>

    <!-- ======= Header ======= -->
    <?php include("../inc/navbar.php"); ?>

    <!-- ======= Sidebar ======= -->
    <?php include("../inc/sidebar.php"); ?>
    <?php include("../connection/config.php"); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Results</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">add-results</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add results</h5>
                        <?php
                        if(isset($_POST['submit'])){
                            $title = $_POST['title'];
                            $date = $_POST['date'];
                            $description =$_POST['description'];

                            if($title !=="" && $title!="" && $description !=""){
                                $query="INSERT INTO results (title,date,description) VALUES ('$title','date','$description')";
                                $result = mysqli_query($con,$query);

                                if($result){
                                    ?>
                        <div class="alert alert-success" role="alert">
                            Data submitted succesfully
                        </div>
                        <?php
                                }
                                else{
                                    ?>
                        <div class="alert alert-danger" role="alert">
                            Data not inserted
                        </div>
                        <?php
                                }
                            }
                            else{
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
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="date">
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