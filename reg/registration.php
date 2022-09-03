<!DOCTYPE html>
<html>
<head>
    <title>Registeration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <div class="row">
          <div class="row col col-md-6">
            <?php
              // form content
              require "sections/add_admin.html";
            ?>
          </div>
        </div>
    </div>
</body>
</head>