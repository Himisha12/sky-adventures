<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("database connection failed".mysqli_connect_error());
}
else{
    echo"database is successfully connected";
}
$sg = $_POST['firstname'];
$rg = $_POST['password'];

if($sg!="" && $rg !="")
{
    $sql="INSERT INTO login_details VALUES('$sg','$rg')";
    $data=mysqli_query($conn,$sql);
    if($data)
    {
        echo"<script>alert('data inserted into database');</script>";
        header("Location: index.html");

    }
}
    
    else
    {
        echo "font color='red'>All fields are required";
    }

// Close connection

mysqli_close($conn);
?>
</body>
</html>