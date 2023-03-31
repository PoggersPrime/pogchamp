<?php
require("../connection/config.php");

?>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['password']);

    if ($email !== "" && $password !== "") {
        if ($password == $cpassword) {
            $query = "SELECT * FROM admin where email='$email' And password='$password'";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $row = $result->fetch_assoc();

                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];

                // header("Refresh:0; url=../home.php");
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=../home.php\">";
            } else {
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">";
            }
        } else {
?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    Password does not match, Plese try again!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
        }
    } else {
        ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    All fields are required
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    }
}

?>