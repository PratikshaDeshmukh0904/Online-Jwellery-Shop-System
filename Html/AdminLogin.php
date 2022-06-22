<?php
session_start();
$conn=mysqli_connect("localhost","root","","signup");

if(isset($_POST['login'])){
    $Name=$_POST['name'];
    $Password=$_POST['pass'];

    $sql="select * from admin where name='$Name' and password='$Password' ";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($query);

    if($row==1){
        echo"login successful";
        
        header('location:AdminDashboard.html');

    }
    else{
        echo"login failed";
        header('location:AdminLogin.php')
       }}


?>