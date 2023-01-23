<?php 
//connecting to mysql database
$con = mysqli_connect("localhost","root","");
if($con === false)
{
    echo ("ERROR: " . mysqli_connect_error());
}

//Print host information
echo "Connection Successful. Host info: " . mysqli_get_host_info($con);
mysqli_close($con);

?>