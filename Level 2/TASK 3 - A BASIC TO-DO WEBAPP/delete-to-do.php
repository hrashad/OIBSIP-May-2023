<?php
 
include('database.php');
if(isset($_GET["deltask"])){
    $id= $_GET["deltask"];

    $sql = " DELETE FROM todo WHERE id=$id ";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($conn));
    }
    
}
?>


