<?php include("../inc/header.php"); ?>
<!-- ======= Header ======= -->
<?php include("../inc/navbar.php"); ?>

<!-- ======= Sidebar ======= -->
<?php include("../inc/sidebar.php"); ?>
<?php include("../connection/config.php"); ?>

<main id="main" class="main">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid p-4">
                <div class="pagetitle">
                    <h1>Edit contacts</h1>
                    <a href="manage-contacts" class="btn btn-primary btn-md my-3 ">Back</a>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                            <li class="breadcrumb-item active">edit-Contacts</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <section class="section">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM contact_frontend where id=$id";
                                    $result = mysqli_query($con, $query);
                                    $data = $result->fetch_assoc();
                                }
                                ?>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $subjects = $_POST['subjects'];
                                    $messages = $_POST['messages'];
                                    if ($email !== "" && $messages != "" && $name !== "") {
                                        $query = "UPDATE contact_frontend SET email='$email',subject='$subject',name='$name',messages='$description' where id='$id'";
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
                                                <label for="exampleInputName1" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="exampleInputName1" disabled
                                                    aria-describedby="nameHelp" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    disabled aria-describedby="emailHelp" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputSubject1" class="form-label">subject</label>
                                                <input type="text" class="form-control" id="exampleInputSubject1"
                                                    disabled aria-describedby="subjectHelp" name="subjects">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputmessage1" class="form-label">Message</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                    disabled name="messages"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>

</main><!-- End #main -->

<?php include("../inc/footer.php"); ?>