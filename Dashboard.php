<?php 

include "databaseConn.php";
include_once "VapeRepository.php";
include_once "deals.php";


$strep = new VapeRepository();
$vape = $strep->getAllVape();


?>

<!DOCTYPE html>
<html>

<body>
    <a href="Register1.php" style="margin-top:40px; margin-left:40px;color:black;">Register</a>
    <table>
        <thead>
            <tr>
                <th>Emri</th>
                <th>Pershkrimi</th>
                <th>Cmimi</th>
                <th>image</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($vape as $vapet) {  ?>

            <tr>
                <td><?php echo $vapet['Emri'];?></td>
                <td><?php echo $vapet['Pershkrim'];?></td>
                <td><?php echo $vapet['Cmimi'];?></td>
                <td><?php echo $vapet['img'];?></td>

                <td><a href='edit.php?Id=<?php echo $vapet['Id']?>'>Edit</a></td>

                <td><a href='delete.php?Id=<?php echo $vapet['Id']?>'>Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
        <style>
            /* Apply basic styles to the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

/* Style table header */
th {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Style table rows */
tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f2f2f2;
}

/* Style table cells */
td {
    border: 1px solid #ddd;
    padding: 8px;
}

/* Apply some spacing to the table */
thead {
    margin-bottom: 10px;
}

tbody {
    margin-top: 10px;
}

        </style>

    </table>
</body>

</html>
