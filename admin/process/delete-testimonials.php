<?php 
 include("../connection/config.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $delete = "DELETE FROM testimonials where id=$id";
    $result = mysqli_query($con,$delete);
    if($result){
        echo header('Refresh: 0; url=../testimonials/manage-testimonials?msg=dataisdeleted');
     }
     else {
        echo header('Refresh: 0; url=../testimonials/manage-testimonials?msg=error');;
     }
}




?>