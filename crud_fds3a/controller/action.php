<?php
    require_once('../database/conn.php');
    function getRecords(){
        $conn = connectDb();
        $query = "SELECT * FROM student";
        $result = $conn->query($query);
        $records = array();
        while($row = mysqli_fetch_assoc($result)){
             $records[] = $row;
    }
    return $records;
}

function insertStudent( $lname, $fname, $studid, $age, $stat, $address, $cn){
    $conn = connectDb();
    $qry = "INSERT INTO student(lname,fname, studid, age,stat,address,cn)
    VALUES ('$lname', '$fname','$studid', '$age', '$stat', '$address', '$cn')";

     $res = $conn->query($qry);

     return $res;
} 
function updateStudent($id, $lname, $fname, $studid, $age, $stat, $address, $cn){
    $conn = connectDb();
    $qry = $conn->query("UPDATE student
                         SET lname = '$lname', fname = '$fname', studid = '$studid',  age = '$age', stat = '$stat', address = '$address', cn = '$cn'
                        WHERE id = '$id'");

     return $qry;
}

function deleteStudent($id){
    $conn = connectDb();
    $qry=$conn->query(" DELETE FROM student WHERE id='$id'");

    return $qry;
}

function fetchStudent($id){
    $conn = connectDb();
    $qry = $conn->query("SELECT * FROM student WHERE id='$id'");

    return $qry;
}
?>