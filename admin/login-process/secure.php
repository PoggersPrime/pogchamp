<?php
if (isset($_SESSION['email'])) {
} else {
    header("Refresh:0; url=index.php");
}