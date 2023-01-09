<?php
session_start();

unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
echo "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">"
?>