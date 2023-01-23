<?php
$con = mysqli_connect("localhost","root","","BIMDatabase");
if($con === false){
    die("Error on Connection " . mysqli_connect_error());
}
// $qry = "SELECT * FROM student ORDER BY name DESC limit 2";

// $qry = "SELECT * FROM student where address='chitwan' ";

//wildcard for name ending with i.
// $qry = "SELECT * FROM student WHERE name LIKE '%i'";


//wildcard for name starting with su.
$qry = "SELECT * FROM student WHERE name LIKE '%l__'";

//wildcard for BIM or BIT
//$qry = "SELECT * FROM student WHERE faculty LIKE 'BI_';

//wildcard for name containing i.
// $qry = "SELECT * FROM student WHERE name LIKE '%i%'";
if(!$result = mysqli_query($con,$qry)){
    echo 'Error : ' . mysqli_error($con);
}

while($row = mysqli_fetch_object($result))
{
    echo 'ID : ' . $row->id;
    echo '<br>';
    echo 'Name : ' . $row->name;
    echo '<br>';
    echo 'Phone : ' . $row->phone;
    echo '<br>';
    echo 'Address : ' . $row->address;
    echo '<br>';
    echo 'Email : ' . $row->email;
    echo '<br>';
    echo '<br>';
}
mysqli_close($con);
?>