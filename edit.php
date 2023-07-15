<?php
    
    include "connect.php";
    $studentId = $_GET["studentId"];
    $sql = "SELECT * FROM student WHERE id = $studentId";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax CRUD || Update</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
</head>
<body>

    <div class="container">
        <div class="main update_main">
            <h2 class="title">UPDATE</h2>

            <form class="form">
                <div class="form_box">
                    <input value="<?php echo $row["stu_name"]; ?>" class="form_input" type="text" id="stu_name">
                    <input value="<?php echo $row["stu_email"]; ?>" class="form_input" type="text" id="stu_email">
                    <input value="<?php echo $row["stu_password"]; ?>" class="form_input" type="text" id="stu_password">
                    <button class="update_btn" data-id="<?php echo $row["id"]; ?>">Update Data</button>
                    <a class="back_btn" href="#">Back to HOME</a>
                </div>
            </form>

        </div>
    </div>

    

    <script src="jQuary.js"></script>
    <script src="main.js"></script>
</body>
</html>