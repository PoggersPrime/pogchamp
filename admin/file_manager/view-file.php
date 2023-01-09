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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">edit-file</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit file</h5>
                        <a href="manage-file" class="btn btn-primary btn-md my-3 ">Back</a>
                        <?php
                        if(isset($_GET['id'])){
                            $id =$_GET['id'];

                            $select = "SELECT * FROM files where id=$id ";
                            $result = mysqli_query($con,$select);
                            $data = $result ->fetch_assoc();
                        }else{
                            echo "huge frekin error";
                        }
                        ?>

                        <?php
                        if(isset($_POST['submit'])){
                            $title=$_POST['title'];
                            $description=$_POST['description'];
                            $filename = $_FILES['dataFile']['name'];
                            $filesize= $_FILES['dataFile']['size'];
            // name ra extention(.exe) lai xutauni kam 
                            $explode = explode('.',$filename);
            // lower case banauna
                            $firstname = strtolower($explode[0]);
                            $ext = strtolower(@$explode[1]);
            // for removing sapce
                            $rep = str_replace(' ','',$filename);
            // connecting all peices 
                             $finalname= $rep.time().'.'.$ext;
                             if($filesize >=20000){
                                if($ext=="png" || $ext == "jpg" || $ext == "jpeg"){ 
                                    if(move_uploaded_file($_FILES['dataFile']['tmp_name'],'../img/'.$finalname)){
                                    $query="UPDATE files SET title='$title',description='$description',filelink='$finalname',type='$ext' where id='$id'";
                                    $result = mysqli_query($con,$query);
                                    if($result){
                                        ?>
                        <div class="alert alert-warning" role="alert">
                            File is submitted
                        </div>
                        <?php
                         echo("<meta http-equiv=\"refresh\" content=\"0;URL=manage-file.php\">");
                                    }
                                    else{
                                        ?>
                        <div class="alert alert-warning" role="alert">
                            error
                        </div>
                        <?php
                                    }
                                    }
                                    else{
                                        ?>
                        <div class="alert alert-warning" role="alert">
                            File is not uploded
                        </div>
                        <?php
                                    }
                        
                                }
                            }
                        }
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="title" disabled
                                            value="<?php echo $data['title']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        <img src="<?php echo "../img/" .$data['filelink'] ?>" alt="no" height="auto"
                                            width="100%">
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="dataFile"
                                            aria-describedby="emailHelp" disabled
                                            value="<?php echo $data['filelink']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            name="description" disabled
                                            value=""><?php echo $data['description']; ?></textarea>
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