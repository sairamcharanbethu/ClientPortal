<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Invoice System</span>
</nav>
<h1 align="center">Client Registration</h1>
<hr>
<form action="index.php" method="post" >
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCName">Client Name</label>
                <input type="text" class="form-control" name="inputCName" placeholder="Enter Client Name">
            </div></div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="inputContact">Work Phone:</label>
                <input type="tel" class="form-control" name="inputWork" placeholder="">
            </div>
            <div class="form-group col-md-4">
                <label for="inputContact">Mobile Phone:</label>
                <input type="tel" class="form-control" name="inputMobile" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputAddress">Address</label>
                <textarea type="text" class="form-control" name="inputAddress" placeholder="1234 Main St"></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Province</label>
                <input type="text" class="form-control" name="inputProvince">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Postal Code</label>
                <input type="text" class="form-control" name="inputPost">
            </div>
        </div>


        <button type="submit" class="btn btn-primary" value="register" name="register">Register</button>
    </div>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php
include ('connection.php');
if (isset($_POST['register']))
{
    $clientName=$_POST['inputCName'];
    $clientEmail=$_POST['inputEmail'];
    $clientMobile=$_POST['inputMobile'];
    $clientAddress=$_POST['inputAddress'];
    $clientCity=$_POST['inputCity'];
    $clientProvince=$_POST['inputProvince'];
    $clientPost=$_POST['inputPost'];

    $insert_user="insert into clientinfo (c_name,c_email,c_mobile,c_address,c_city,c_province,c_zip) VALUES ('$clientName','$clientEmail','$clientMobile','$clientAddress','$clientCity','$clientProvince','$clientPost')";

    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('client.php','_self')</script>";
    }
}

?>