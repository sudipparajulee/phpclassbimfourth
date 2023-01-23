<?php
$con = mysqli_connect("localhost","root","");
//check connection
if(!isset($con))
{
    die("Error: " . mysqli_connect_error());
}

//Create database
$query = "CREATE DATABASE BIMDatabase";
if(mysqli_query($con,$query)){
    echo 'Database Created Successfully';
}
else
{
    echo 'Error: Failed to Create '. mysqli_error($con);
}
mysqli_close($con);
?>