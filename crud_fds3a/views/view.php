<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="5">
        <thead color>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Student ID</th>
            <th>Age</th>
            <th>Address</th>
            <th>Status</th>
            <th>Contact Number</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php

            require_once('../controller/action.php');

            $record = getRecords();
            if(!empty($record)){
                foreach($record as $key){
         ?>
                      <tr>
                            <td><?=$key['id']?></td>
                            <td><?=$key['lname']?></td>
                            <td><?=$key['fname']?></td>
                            <td><?=$key['studid']?></td>
                            <td><?=$key['age']?></td>
                            <td><?=$key['address']?></td>
                            <td><?=$key['stat']?></td>
                            <td><?=$key['cn']?></td>
                             <td>
                                <a href="update.php?id=<?=$key['id'] ?>">Edit</a>
                                <a href="delete.php?id=<?=$key['id'] ?>">Delete</a>
                             </td>
                     </tr>
     <?php
         }
     }else{
         echo "No records found!";
     }

?>
    
        </tbody>
    </table>
</body>
</html>