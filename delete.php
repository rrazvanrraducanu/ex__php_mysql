<?php
 //include connection file
 include "connection.php";
 
 $sql="DELETE FROM flori WHERE id='{$_GET['id']}'";
 $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
 header('Location:index.php');
 ?>
