<?php

include "connect.php";

$studentName = $_GET["studentName"];
$studentEmail = $_GET["studentEmail"];
$studentPassword = $_GET["studentPassword"];
$studentId = $_GET["studentId"];

$sql = "UPDATE student SET stu_name='$studentName',stu_email='$studentEmail',stu_password='$studentPassword' WHERE id= $studentId";

$result = mysqli_query($conn,$sql);

if($result){
    echo "data update successfull";
}else{
    echo "data update failed";
}











