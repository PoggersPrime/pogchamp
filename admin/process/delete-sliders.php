<?php 
  require('../connection/config.php');
?>
<?php 

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete= "DELETE FROM sliders where id=$id ";
    $result1= mysqli_query($con,$delete);
    if($result1){
       echo header('Refresh: 0; url=../sliders/manage-sliders?msg=dataisdeleted');
    }
    else {
       echo header('Refresh: 0; url=../sliders/manage-sliders?msg=error');;
    }
}
?>