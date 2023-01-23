<?php 

$con = mysqli_connect("localhost","root","","BIMDatabase");
if($con === false){
    die ("Error: ". mysqli_connect_error());
}

$qry = "INSERT INTO student(name,phone,address,email) VALUES ('RAM','98123456789', 'nawalpur', 'ram@lict.edu.np')";

if(mysqli_query($con,$qry)){
    echo 'Data inserted successfully';
}
else
{
    echo 'Some error occured : ' . mysqli_error($con);
}
?>