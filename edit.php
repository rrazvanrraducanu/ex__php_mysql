<?php
       //include connection file
        include 'connection.php';
        if(!isset($_POST["submit"])){
$sql="SELECT * FROM flori WHERE ID='{$_GET['id']}'";
            $result=mysqli_query($con, $sql);
            $record=  mysqli_fetch_array($result);
        }else{
$sql1="UPDATE flori SET nume='{$_POST['nume']}', culoare='{$_POST['culoare']}', marime='{$_POST['marime']}', pret='{$_POST['pret']}' WHERE id='{$_POST['id']}'";
           mysqli_query($con, $sql1) or die(mysqli_error($con));
           header('Location:index.php');
        }
 ?>
<h1>Editati inregistrarea:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Nume:<br/><input type="text" name="nume" value="<?php echo $record['nume'] ;?>"/><br/>
    Culoare:<br/><input type="text" name="culoare" value="<?php echo $record['culoare'] ;?>"/><br/>
    Marime:<br/><input type="text" name="marime" value="<?php echo $record['marime'] ;?>"/><br/>
    Pret:<br/><input type="text" name="pret" value="<?php echo $record['pret'] ;?>"/><br/>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <input type="submit" name="submit" value="Edit"/>
</form>
