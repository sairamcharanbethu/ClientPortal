<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scrol">
    <h1 align="center">All the Users</h1>

    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->



        <table class="table table-bordered table-hover table-striped table-responsive" style="table-layout: fixed">
            <thead>

            <tr>
                <th>Client ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>City</th>
                <th>Province</th>
                <th>Postal Code</th>
                <th>Actions</th>
            </tr>
            </thead>

            <?php
            include("connection.php");
            $view_users_query="select * from clientinfo";//select query for viewing users.
            $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
            {
                $client_id=$row[0];
                $client_name=$row[1];
                $client_email=$row[2];
                $client_mobile=$row[3];
                $client_addr=$row[4];
                $client_city=$row[5];
                $client_province=$row[6];
                $client_post=$row[7];
                ?>

                <tr>
                    <!--here showing results in the table -->
                    <td><?php echo $client_id;  ?></td>
                    <td><?php echo $client_name;  ?></td>
                    <td><?php echo $client_email;  ?></td>
                    <td><?php echo $client_mobile;  ?></td>
                    <td><?php echo $client_addr;  ?></td>
                    <td><?php echo $client_city;  ?></td>
                    <td><?php echo $client_province;  ?></td>
                    <td><?php echo $client_post;  ?></td>
                    <td><a href="delete.php?del=<?php echo $client_id ?>"><button class="btn btn-danger">Delete</button></a></td>
                    <td><a href="invoice.php?id=<?php echo $client_id ?>"><button class="btn btn-primary">Create Invoice</button></a></td>
                </tr>

            <?php } ?>

        </table>

    </div>
</div>


</body>

</html>
