<?php

include "connect.php";

$studentId = $_POST['studentId'];

$sql = "DELETE FROM student WHERE id = {$studentId}";

$result = mysqli_query($conn,$sql);

if($result){
    echo 1;
}else{
    echo 0;
}

