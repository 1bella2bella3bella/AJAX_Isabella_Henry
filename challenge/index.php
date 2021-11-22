<!DOCTYPE html>
<html lang="en" >

<head>
   <meta  charset="UTF-8">
   <meta  name="viewport" content="width=device-width, initial-scale=1.0" >
   <title>Show all users</title >
</head>
<body >
   <button id= "button">Get users</button>
    <h1>Users</h1>
    <div id="users">
  <!--our users will be displayed in this div-->
   </div>

   <script>
document.getElementById("button").addEventListener("click", getUsers, false);

function getUsers(){
    const userObj = new XMLHttpRequest();

    userObj.open('GET', 'user.php', true);

    userObj.onload = function(){
        if (this.status==200){
            let users = JSON.parse(this.responseText);
            console.log(users);

            let output ='';

            for (let i in users){
                output += `<p> first name: ${users[i].fname} <br>
                last name: ${users[i].lname} <br>
                email: ${users[i].email} <br>
                password: ${users[i].password}</p>`;
            }
            document.getElementById('users').innerHTML=output;
        }
    }
    userObj.send();
    }
   </script>

   </body>
</html>