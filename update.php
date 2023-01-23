<?php 
$con = mysqli_connect("localhost","root","","BIMDatabase");

if($con === false)
{
    die("Connection Error " . mysqli_connect_error());
}

// $qry = "UPDATE student SET name='Shyam',phone='981111111', address = 'New Address' where id=3";

$qry = "DELETE from student where id=3";

if(mysqli_query($con,$qry)){
    echo "Data deleted successfully";
}
else
{
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);

?>