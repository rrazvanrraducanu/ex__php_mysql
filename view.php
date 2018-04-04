<?php
       //include connection file
        include 'connection.php';
        $sql="SELECT * FROM flori WHERE ID='{$_GET['id']}'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "Nume: ".$row["nume"]."<br/>";
             echo "Culoare ".$row["culoare"]."<br/>";
             echo "Marime: ".$row["marime"]."<br/>";
             echo "Pret: ".$row["pret"]."<br/>";
            ?>
<a href="index.php">Back</a>
