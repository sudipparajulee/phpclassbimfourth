<html>
    <head>
        <title>Data Insert From Form</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="text" name="phone" placeholder="Phone">
            <input type="text" name="address" placeholder="Address">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $email = $_POST['email'];

    if($name == '')
    {
        die('Name field is required');
    }

    if($phone == '')
    {
        die("Phone is required");
    }

    if($add == "")
    {
        die('Address is required');
    }

    if($email == "")
    {
        die ('Email is required');
    }
    $con = mysqli_connect("localhost","root","","BIMDatabase");
    if($con === false)
    {
        die("Error : " . mysqli_connect_error());
    }

    $qry = "INSERT INTO student(name,phone,address,email) VALUES ('$name','$phone', '$add', '$email')";

    if(mysqli_query($con,$qry))
    {
        echo 'Data Inserted Successfully';
    }
    else
    {
        echo 'Cannot insert data. Error: ' . mysqli_error($con);
    }

    mysqli_close($con);
}
?>