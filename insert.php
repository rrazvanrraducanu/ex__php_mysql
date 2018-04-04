<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Nume:<br/><input type="text" name="nume"/><br/>
    Culoare:<br/><input type="text" name="culoare"/><br/>
    Marime:<br/><input type="text" name="marime"/><br/>
    Pret:<br/><input type="text" name="pret"/><br/>
    <input type="submit" name="submit" value="Submit"/>
</form>

<?php
 //include connection file
 include "connection.php";
 if(isset($_POST["submit"])){
$sql="INSERT INTO flori (nume, culoare, marime, pret) VALUES ('{$_POST["nume"]}', '{$_POST["culoare"]}', '{$_POST["marime"]}', '{$_POST["pret"]}')";
 $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
 echo "Inregistrarea a fost adaugata cu succes!";
 }
 ?>
<br/><br/>
<a href="index.php">index</a>
<br/><br/>