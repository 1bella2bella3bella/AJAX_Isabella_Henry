<?php
$conn=mysqli_connect('localhost','root','','registration');
//query
    $query="SELECT * FROM users";
//Get results
 $result= mysqli_query($conn,$query);
 //Fetch Data from database
 $users=mysqli_fetch_all($result, MYSQLI_ASSOC);
 echo json_encode($users); //js_encode is the php method for JSON.stringify
?>