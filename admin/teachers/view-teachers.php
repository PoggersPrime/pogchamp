<?php include('../inc/header.php'); ?>
<?php include("../connection/config.php"); ?>

<body>

    <!-- ======= Header ======= -->
    <?php include("../inc/navbar.php"); ?>

    <!-- ======= Sidebar ======= -->
    <?php include("../inc/sidebar.php"); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Sliders</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Course features</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Sliders</h5>
                        <a href="manage-sliders" class="btn btn-primary btn-md my-3 ">Back</a>
                        <?php
                         if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $edit="SELECT* FROM teachers where id=$id";
                            $result=mysqli_query($con,$edit);
                            $data=$result->fetch_assoc();
                        } 
                        ?>
                        <?php
                        if(isset($_POST['submit'])){
                            $img = $_POST['img'];
                            $name =$_POST['name'];
                            $post= $_POST ['post'];

                            if($img !== "" && $name != ""){
                                $query = "UPDATE teachers SET img='$img',name='$name',post='$post' where id=$id";
                                $result = mysqli_query($con,$query);

                                if($result){
                                    ?>
                        <div class="alert alert-success" role="alert">
                            Submitted succesfully
                        </div>
                        <?php
                        echo("<meta http-equiv=\"refresh\" content=\"0;URL=manage-sliders.php\">");
                                }
                                else{
                                    ?>
                        <div class="alert alert-danger" role="alert">
                            Data not submitted
                        </div>
                        <?php
                                }
                            }
                            else {
                                ?>
                        <div class="alert alert-danger" role="alert">
                            Data not submitted
                        </div>
                        <?php
                            }
                        }
                         ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" disabled
                                            aria-describedby="emailHelp" name="name"
                                            value="<?php echo $data['name'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <!-- Modal trigger button -->

                                        <!-- Modal Body -->
                                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalNameId"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <style>
                                                            [type=radio]:checked+img {
                                                                outline: 2px solid #f00;
                                                            }
                                                            </style>

                                                            <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $select_result = mysqli_query($con, $select_query);
                                                    $i = 0;
                                                    while ($data_select = mysqli_fetch_array($select_result)) {
                                                        $i++;
                                                    ?>
                                                            <label>
                                                                <input type="radio" name="img"
                                                                    value="<?php echo $data_select['filelink']; ?>"
                                                                    style="opacity: 0;" />
                                                                <img src="<?php echo "../img/" . $data_select['filelink']; ?>"
                                                                    alt="" height="100px;" width="100px;"
                                                                    style="margin-right:20px;">
                                                            </label>
                                                            <?php
                                                    }
                                                    ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal"
                                                            onclick=" firstFunction()">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Optional: Place to the bottom of scripts -->
                                        <script>
                                        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                                        </script>
                                    </div>
                                    <div class="form-group col-12 mb-0">
                                        <label class="col-form-label">Image</label>
                                    </div>
                                    <div class="input-group mb-3 col-12">
                                        <img src="<?php echo "../img/".$data['img'] ?>" alt="no" height="auto"
                                            width="100%">
                                        <input id="imagebox" type="text" class="form-control" disabled name="img"
                                            disabled readonly value="<?php echo $data['img'] ?>">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Post</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            disabled name="post"> <?php echo $data['post'] ?> </textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main><!-- End #main -->
    <script>
    function firstFunction() {
        var x = document.querySelector('input[name=img]:checked').value;
        document.getElementById('imagebox').value = x; // use .innerHTML if we want data on label
    }
    </script>

    <?php include("../inc/footer.php"); ?>