<?php

include "connect.php";

if(isset($_POST["studentName"]) && ($_POST["studentEmail"]) && ($_POST["studentPassword"])){

    $studentName = $_POST["studentName"];
    $studentEmail = $_POST["studentEmail"];
    $studentPassword = $_POST["studentPassword"];

    $sql = "INSERT INTO student(stu_name,stu_email,stu_password) VALUES('$studentName','$studentEmail','$studentPassword')";

    if(mysqli_query($conn,$sql)){
        echo "1";
    }else{
        echo "0";
    };

}