<?php

    require_once('controller/action.php');

    $record = getRecords();

    
    if(!empty($record)){
        foreach($record as $key){
            echo $key["id"];
        }
    }else{
        echo "No records found!";
    }


?>