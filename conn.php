<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['message'];

$conn = new mysqli('localhost','root','');
mysqli_select_db($conn,"sri");
$query = "INSERT INTO srii(`name`, `email`, `message`) VALUES ('$a','$b','$c')";
mysqli_query($conn,$query);
header('location:home.php');
mysqli_close($conn);
?>