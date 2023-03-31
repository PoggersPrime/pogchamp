<?php include('../inc/header.php'); ?>
<?php include("../connection/config.php"); ?>

<body>

    <!-- ======= Header ======= -->
    <?php include("../inc/navbar.php"); ?>

    <!-- ======= Sidebar ======= -->
    <?php include("../inc/sidebar.php"); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Admin</h1>
            <a href="manage-admin.php" class="btn btn-primary btn-md my-2">Back</a>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                    <li class="breadcrumb-item active">edit-admin</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit admin</h5>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $select = "SELECT * FROM admin where id=$id";
                            $result1 = mysqli_query($con, $select);
                            $data = $result1->fetch_assoc();
                        }
                        ?>
                        <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $password = @$_POST['password'];
                            $confirm = @$_POST['password'];
                            if ($password === $confirm) {
                                if ($name !== "" && $phone !== "" && $email !== "" && $password !== "") {
                                    $query = "UPDATE admin SET name='$name',email='$email',phone='$phone',password='$password' where id='$id'";
                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                        ?>
                        <div class="alert alert-success" role="alert">
                            Submitted succesfully
                        </div>
                        <?php
                                    } else {
                                    ?>
                        <div class="alert alert-danger" role="alert">
                            Data not submitted
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
                        }
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="name" require
                                            placeholder="Enter your full name" value="<?php echo $data['name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="email"
                                            value="<?php echo $data['email']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Number</label>
                                        <input type="tel" require class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="phone"
                                            value="<?php echo $data['phone']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" disabled
                                            name="password" value="<?php echo $data['password']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword"
                                    disabled value="<?php echo $data['password']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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