<?php include('../inc/header.php') ?>

<body>
    <?php include('../inc/navbar.php') ?>
    <?php include('../inc/sidebar.php') ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Manage admin</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                    <li class="breadcrumb-item active">manage-admin</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage admin</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table = "SELECT * FROM admin ";
                                $result1 = mysqli_query($con, $table);
                                $i = 0;
                                while ($data = mysqli_fetch_array($result1)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo ++$i; ?></th>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['phone'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['password'] ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm "
                                            href="edit-admin.php?id=<?php echo $data['id']; ?>" role="button">Edit
                                        </a>
                                        <a class="btn btn-info btn-sm "
                                            href="view-admin.php?id=<?php echo $data['id']; ?>" role="button">View
                                        </a>
                                        <a class="btn btn-danger btn-sm "
                                            href="../process/delete-admin.php?id=<?php echo $data['id']; ?>"
                                            role="button">Delete </a>
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
            </div>
        </section>

    </main><!-- End #main -->

    <?php include("../inc/footer.php"); ?>