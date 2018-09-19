<?php session_start();?>
<?php
/**
 * Created by PhpStorm.
 * User: saira
 * Date: 06-Sep-2018
 * Time: 4:19 PM
 */
include('connection.php');
$clientid=$_GET['id'];
$select="select * from clientinfo WHERE c_id='$clientid'";
$run=mysqli_query($dbcon,$select);
if($run) {
    while ($row = mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
    {
        $client_id = $row[0];
        $client_name = $row[1];
        $client_email = $row[2];
        $client_mobile = $row[3];
        $client_addr = $row[4];
        $client_city = $row[5];
        $client_province = $row[6];
        $client_post = $row[7];
        $_SESSION['clientid'] = $client_id;
        $_SESSION['clientname'] = $client_name;
        $_SESSION['clientaddr'] = $client_addr;
        $_SESSION['clientcity']=$client_city;
        $_SESSION['clientprovince']=$client_province;
        $_SESSION['clientpost']=$client_post;
        $_SESSION['clientmobile']=$client_mobile;
        $_SESSION['clientemail'] = $client_email;

        header("Location:invoiceClient.php?$client_name");
    }
    die();
    //javascript function to open in the same window


}
?>

