<?php
 include("../connection/config.php");
 
 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query1="SELECT * from files where id= $id";
    $result= mysqli_query($con, $query1);
    
    $row= $result->fetch_assoc();
    $filelink= $row['filelink'];
    $finallink= '../img/'.$filelink;
    unlink($finallink);

    $query=" DELETE FROM files where id =$id";
    $result= mysqli_query($con, $query);
    if($result){
        echo header('Refresh: 0; url=../sliders/manage-sliders?msg=dataisdeleted');
     }
     else {
        echo header('Refresh: 0; url=../sliders/manage-sliders?msg=error');;
     }
}
?>