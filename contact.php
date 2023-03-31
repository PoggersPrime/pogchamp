<?php
include("inc/header.php");
?>

<body>

    <!-- ======= Header ======= -->
    <?php
    include("inc/navbar.php");
    ?>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas
                    sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <?php
                            $query = "SELECT *FROM settings";
                            $result = mysqli_query($con, $query);
                            // $data= $result->fetch_all();
                            while ($site = $result->fetch_assoc()) {
                                if ($site['site_key'] == "location") {
                                    $location = $site['site_value'];
                                }
                                if ($site['site_key'] == "email") {
                                    $email = $site['site_value'];
                                }
                                if ($site['site_key'] == "phone") {
                                    $phone = $site['site_value'];
                                }
                                // yastai aru declare garne
                            }
                            ?>
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p><?php echo  $location; ?></p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p><?php echo  $email; ?></p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p><?php echo  $phone; ?></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $subjects = $_POST['subjects'];
                            $messages = $_POST['messages'];
                            if ($name !== "" && $messages !== "") {
                                $form = "INSERT INTO contact_frontend (name,email,subjects,messages) VALUES ('$name','$email','$subjects','$messages') ";
                                $result = mysqli_query($con, $form);
                                if ($result) {
                        ?>
                                    <div class="alert alert-success" role="alert">
                                        Form submitted succesfully
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        Error while submition
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="alert alert-info" role="alert">
                                    Please fill all the data
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
                                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputSubject1" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="exampleInputSubject1" aria-describedby="subjectHelp" name="subjects">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputmessage1" class="form-label">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="messages"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <?php
    include("inc/footer.php");
    ?>