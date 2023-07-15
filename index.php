<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax CRUD || Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
</head>
<body>


    <div class="container">
        <div class="main form_page">
            <h2 class="title">INSERT</h2>

            <form class="form">
                <div class="form_box">
                    <input autocomplete="off" class="form_input" type="text" id="stu_name" placeholder="Enter Your Name">
                    <input autocomplete="off" class="form_input" type="email" id="stu_email" placeholder="Enter Your Email">
                    <input autocomplete="off" class="form_input" type="password" id="stu_password" placeholder="Enter Your Password">
                    <button class="insert_btn">Insert Data</button>
                </div>
            </form>

            <h2 class="title">Insert Data List</h2>

            <div id="load_table"></div>
        </div>
    </div>

    

    <script src="jQuary.js"></script>
    <script src="main.js"></script>
</body>
</html>