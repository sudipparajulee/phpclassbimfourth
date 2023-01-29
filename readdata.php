<?php
session_start();
if(!isset($_SESSION['loginuser']) || $_SESSION['loginuser'] != 'isloggedin')
{
    header('location:login.php');
}
$con = mysqli_connect("localhost","root","","BIMDatabase");
if($con === false){
    die("Error on Connection " . mysqli_connect_error());
}
$qry = "SELECT * FROM student";
if(!$result = mysqli_query($con,$qry)){
    echo 'Error : ' . mysqli_error($con);
}

?>
<html>
    <head>
        <title>Data insert</title>
        <style>
            input,button{
                display: block;
                width: 400px;
                margin: 10px;
                padding: 10px;
                border-radius: 10px;
                border: none;
                background-color: #dddddd;
            }

            button{
                background-color: blue;
                width: 100px;
                color: white;
            }

            .container{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                gap: 10px;
            }

            .inner-data{
                background-color: #eeeddd;
                padding: 10px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>

    <h1>Hello <?php echo $_SESSION['user']; ?></h1>
    <a href="logout.php">Logout</a>

        <form action="" method="POST">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="text" name="phone" placeholder="Enter Phone">
            <input type="text" name="address" placeholder="Enter Address">
            <input type="email" name="email" placeholder="Enter Email">
            <button type="submit" name="submit">Insert Data</button>
        </form>


        <div class="container">
            <?php
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="inner-data">
                <p>ID: <?php echo $row['id']; ?></p>
                <p>Name: <?php echo $row['name']; ?></p>
                <p>Phone: <?php echo $row['phone']; ?></p>
                <p>Address: <?php echo $row['address']; ?></p>
                <p>Email: <?php echo $row['email']; ?></p>
                <a href="deletedata.php?userid=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
            </div>

            <?php
             }
            
            ?>

            
        </div>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $con = mysqli_connect("localhost","root","","BIMDatabase");
    if($con === false){
        die("Error on Connection " . mysqli_connect_error());
    }

    $qry = "INSERT INTO student(name,phone,address,email) VALUES ('$name','$phone','$address','$email')";

    if(mysqli_query($con,$qry)){
        echo "<script>alert('Data inserted successfully');</script>";
        echo "<script> window.location.href = 'readdata.php';</script>";
    }
    else
    {
        echo "Error " . mysqli_error($con);
    }
    
    mysqli_close($con);
}
?>


   
