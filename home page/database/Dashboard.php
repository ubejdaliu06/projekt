<?php 

include "databaseConn.php";
include_once "VapeRepository.php";


$strep = new VapeRepository();
$vape = $strep->getAllVape();

$comment = $cmrep->getAllComments();
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet"  href="">
    <link rel="stylesheet"  href="">
    
    <body>
        <a href="Register.php" style="margin-top:40px; margin-left:40px;color:black;">Register</a>
        <table>
            <thead>
            <tr>
                <th>Emri</th>
                <th>Pershkrimi</th>
                <th>Cmimi</th>
                
                </tr>
            </thead>
            <tbody>
                <?php foreach($vape as $vape) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $vape['Emri'];?></td>
                        <td><?php echo $vape['Pershkrimi'];?></td>
                        <td><?php echo $vape['Cmimi'];?></td>
                        
                        <td><a href='edit.php?Id=<?php echo $vape['Id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?Id=<?php echo $vape['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
        <br><br><br>