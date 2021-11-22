<?php
$conn=mysqli_connect('localhost','root','' ,'registration');

if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) ){

    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
 
    $query="INSERT INTO users(fname,lname, email, password) VALUES ('$fname','$lname', '$email', '$password')";


    if(mysqli_query($conn,$query )){
        echo "user added";
    }else{
        echo mysqli_error($conn);
    }
};
?>