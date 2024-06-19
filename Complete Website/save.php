<?php

$Your_Name = $_POST["urname"];
$Your_mail = $_POST["urmail"];
$subject = $_POST["subject"];
$Your_message = $_POST["message"];
$conn = mysqli_connect("localhost","root","","database_form") or die("conecction failed");
$sql = "INSERT INTO database_tablee(Your_Name, Your_Mail, Sub, Your_Message) VALUES ('{$Your_Name}','{$Your_mail}''{$subject}''{$Your_message}')";
 $result = mysqli_query($conn,$sql) or die("Query Failed!");
 header("location: http://localhost/Complete%20Website/#contact");
 mysqli_close($conn);
?>