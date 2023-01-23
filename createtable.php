<?php
//create connection

$con = mysqli_connect("localhost","root","","BIMDatabase");
if($con === false)
{
    die('Error' . mysqli_connect_error());
}

//Create table with query
$query = "CREATE TABLE student(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    phone VARCHAR(30),
    address VARCHAR(50),
    email VARCHAR(50) NOT NULL UNIQUE
)";

if(mysqli_query($con,$query))
{
    echo "Table created successfully";
}
else
{
    echo "Table cannot be created ". mysqli_error($con);
}

mysqli_close($con);
?>