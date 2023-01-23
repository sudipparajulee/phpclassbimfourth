<html>
    <head>
        <title>Form Example</title>
    </head>
    <body>
        <form action="forms.php" method="POST">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    echo $username;
}
?>