<?php
       //include connection file
        include "connection.php";
        $sql="SELECT * FROM flori ";
        if(isset($_POST["search"])){
            $search_term=  mysqli_real_escape_string($con, $_POST["search_box"]);
            $sql.="WHERE nume='{$search_term}'";
            $sql.="OR culoare='{$search_term}'";
        }
        $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
        ?>
        <form name="search_form" method="post" action="search.php">
            Search: <input type="text" name="search_box" value=""/>
            <input type="submit" name="search" value="Search the table">
            <input type="reset" value="Reset"/>
        </form>
        <table width="70" cellpadding="4" cellspace="4">
            <tr>
                <th>Nume</th>
                <th>Culoare</th>
                <th>Marime</th>
                <th>Pret</th>
            </tr>
            <?php while($row=mysqli_fetch_array($query)){ ?>
            <tr>
            <td><?php echo $row["nume"];?></td>
            <td><?php echo $row["culoare"];?></td>
            <td><?php echo $row["marime"];?></td>
            <td><?php echo $row["pret"];?></td>
            </tr>
           <?php } ?>
        </table>
