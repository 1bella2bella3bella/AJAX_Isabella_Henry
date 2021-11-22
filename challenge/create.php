<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form">
        <input type="text"  id="firstname" name="fname" placeholder ="first name">

        <input type="text"  id="lastname" name="lname" placeholder ="last name">

        <input type="text"  id="email" name="email" placeholder ="email address">

        <input type="password"  id="password" name="password" placeholder ="password">

        <input type="submit"  value="register">
    </form>
<script>
document.getElementById("form").addEventListener("submit", registration);

function registration(e){
    e.preventDefault();
    let fname=document.getElementById ("firstname").value;
    let lname=document.getElementById ("lastname").value;
    let email=document.getElementById ("email").value; 
    let password=document.getElementById ("password").value;

    let userData = `fname=${fname}&lname=${lname}&email=${email}&password=${password}`;

    //console.log(userData)

    let userObj = new XMLHttpRequest();

    userObj.open("POST", "process.php", true);

    userObjsetRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    userObj.onload =function (){
        if (this.status ==200){
            console.log(this.responseText)
        }
    }
    userObj.send(userData);
}
</script>
</body>
    </html>