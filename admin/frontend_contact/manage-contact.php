<?php include("../inc/header.php"); ?>
<!-- ======= Header ======= -->
<?php include("../inc/navbar.php"); ?>

<!-- ======= Sidebar ======= -->
<?php include("../inc/sidebar.php"); ?>

<main id="main" class="main">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid p-4">
                <div class="pagetitle">
                    <h1>Manage contact</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                            <li class="breadcrumb-item active">manage-contact</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <section class="section">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage contact</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.N</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $table = "SELECT * FROM contact_frontend ";
                                        $result1 = mysqli_query($con, $table);
                                        $i = 0;
                                        while ($data = mysqli_fetch_array($result1)) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo ++$i; ?></th>
                                            <td><?php echo $data['name'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['subjects'] ?></td>
                                            <td><?php echo $data['messages'] ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm "
                                                    href="edit-contact.php?id=<?php echo $data['id']; ?>"
                                                    role="button">Edit
                                                </a>
                                                <a class="btn btn-info btn-sm "
                                                    href="view-contact.php?id=<?php echo $data['id']; ?>"
                                                    role="button">View
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>

</main><!-- End #main -->

<?php include("../inc/footer.php"); ?>