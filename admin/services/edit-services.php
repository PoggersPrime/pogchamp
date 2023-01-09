<?php include("../inc/header.php"); ?>

<body>

    <!-- ======= Header ======= -->
    <?php include("../inc/navbar.php"); ?>

    <!-- ======= Sidebar ======= -->
    <?php include("../inc/sidebar.php"); ?>
    <?php include("../connection/config.php"); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add services</h1>
            <a href="manage-services" class="btn btn-primary btn-md my-3 ">Back</a>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">add-services</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add services</h5>
                        <?php
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $query = "SELECT * FROM services where id=$id";
                            $result = mysqli_query($con,$query);
                            $data = $result ->fetch_assoc();
                        }
                        ?>
                        <?php
                        if(isset($_POST['submit'])){
                            $icon =$_POST['icon'];
                            $description =$_POST['description'];
                            $title = $_POST['title'];
                            if( $title!="" && $description !=""){
                                $query="UPDATE services SET icon='$icon',description='$description',title='$title' where id='$id'";
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
                                        <label for="exampleInputEmail1" class="form-label">title</label>
                                        <input type="tel" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="title"
                                            value="<?php echo $data['title'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">icon</label>
                                        <input type="tel" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="icon"
                                            value="<?php echo $data['icon'] ?>">
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="description"
                                                value="<?php echo $data['description'] ?>">
                                        </div>
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