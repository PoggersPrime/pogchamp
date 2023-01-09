<?php 
 include("../connection/config.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $delete = "DELETE FROM teachers where id=$id";
    $result = mysqli_query($con,$delete);
    if($result){
        echo header('Refresh: 0; url=../teachers/manage-teachers?msg=dataisdeleted');
     }
     else {
        echo header('Refresh: 0; url=../teachers/manage-teachers?msg=error');;
     }
}




?>