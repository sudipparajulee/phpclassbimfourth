<?php
session_start();
?>
<html>
    <head>
        <title>Login</title>
        <style>
            h2{
                text-align: center;
            }
            form{
                width: 500px;
                background-color: #eee;
                text-align: center;
                padding: 20px;
                margin: auto;
                border-radius: 10px;
            }

            input{
                display: block;
                width: 80%;
                margin: 10px auto 10px auto;
                padding: 10px;
                border: none;
                background-color: #ccc;
                border-radius: 10px;
            }

            input:focus{
                outline: none;
            }

            input[type="submit"]{
                background-color: blue;
                color: white;
                width: 30%;
            }
        </style>
    </head>
    <body>
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter Email Address">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM user WHERE email='$email' and password=md5('$password')";

    $con = mysqli_connect("localhost","root","","BIMDatabase");
    if($con === false){
        die ("Error: ". mysqli_connect_error());
    }

    if($result = mysqli_query($con,$qry)){
        $row = mysqli_num_rows($result);
        if($row == 1){
            $_SESSION['loginuser'] = 'isloggedin';
            header('location:readdata.php');
        }
        else
        {
            echo "<script>alert('Invalid login details'); window.location.href='login.php';</script>";
        }
    }

    else
    {
        echo "Error ";
    }
    
    mysqli_close($con);
    

}

?>