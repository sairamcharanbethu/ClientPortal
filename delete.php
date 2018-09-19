<?php
/**
 * Created by PhpStorm.
 * User: saira
 * Date: 06-Sep-2018
 * Time: 4:19 PM
 */
include('connection.php');
$delete_id=$_GET['del'];
$delete_query="delete  from clientinfo WHERE c_id='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('client.php?deleted=user has been deleted','_self')</script>";
}