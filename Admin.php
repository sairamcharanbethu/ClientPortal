<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
        width: 100%;

</style>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="client.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
<?php session_start() ?>
<?php

include("connection.php");

if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($dbcon,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {
        $_SESSION['admin']=$admin_name;
        while($admin_name=="admin"){
            echo "<script>
            window.open('clientUser.php','_self')</script>";}
//        if($_SESSION['admin']=="admin")
//        {echo "<script>window.open('client.php','_self')</script>";}
//        else
//            echo "<script>window.open('clientUser.php','_self')</script>";
    }
    else {
        echo"<script>alert(' Admin Details are incorrect..!')</script>";}

}

?>