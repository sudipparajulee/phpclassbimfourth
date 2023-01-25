<?php 
if(isset($_GET['userid']))
{
    $id = $_GET['userid'];

$con = mysqli_connect("localhost","root","","BIMDatabase");
if($con === false){
    die ("Error: ". mysqli_connect_error());
}

$qry = "DELETE FROM student WHERE id=$id";

if(mysqli_query($con,$qry)){
    echo '<script>alert("Data Deleted Successfully"); window.location.href="readdata.php"</script>';
}
else
{
    echo 'Some error occured : ' . mysqli_error($con);
}
}
?>