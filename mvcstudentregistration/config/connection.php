	<!------------------connect to database----------------------->

<?php
$host="localhost";
$username="root";
$password="";
$database="srs";
$conn=mysqli_connect($host,$username,$password,$database);
if (mysqli_connect_errno())
{
    echo "failed to connect",mysqli_connect_error();
}
else
{
    echo "";
}
?>
