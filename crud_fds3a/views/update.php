<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="views/view.php">View Data</a>
    <h1>This is Update Panel</h1>
    <?php
         require_once("..//controller/action.php");
         $id = $_GET['id'];
         $fetch = fetchStudent($id);
         foreach($fetch as $key);{
    ?>
    <form action="update_student.php" method="post">
        <input type="text" value="<?=$key['id']; ?>" name="id"placeholder="Enter ID..">
        <input type="text" value="<?=$key['lname']; ?>" name="lname"placeholder="Enter Last Name..">
        <input type="text" value="<?=$key['fname']; ?>" name="fname" placeholder="Enter First Name..">
        <input type="text" value="<?=$key['studid']; ?>" name="studid"placeholder="Enter ID..">
        <input type="text" value="<?=$key['age']; ?>" name="age" placeholder="Enter Age..">
        <input type="text" value="<?=$key['address']; ?>" name="address" placeholder="Enter Address..">
        <input type="text" value="<?=$key['stat']; ?>" name="stat" placeholder="Enter Status..">
        <input type="text" value="<?=$key['cn']; ?>" name="cn" placeholder="Enter Contact..">
        <input type="submit" name="btnsave">
    </form>
    <?php
    }
    ?>
</body>
</html>
