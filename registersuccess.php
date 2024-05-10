<?php
    $connect= mysqli_connect('localhost', 'root', '', 'library_management');
    
    $fullname= $_POST['fullname'];
    $rollno= $_POST['rollno'];
    $email= $_POST['email'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    
$insert=mysqli_query($connect,"INSERT INTO registrations(fullname, rollno, email,username, password) values ('$fullname', '$rollno', '$email','$username', '$password')");


    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(adminpage.jpg);
    background-size: cover;
  width:100%;
  background-repeat: no-repeat;
 
    
    
}

.container {
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    max-width: 600px;
    margin: 100px auto;
    text-align: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

p {
    color: #666;
    margin-bottom: 20px;
}

a {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #0056b3;
}
@media(max-width:470px){
    .container{
        margin-left:2%;
        margin-right:2%;
    }
    body{
        height:100vh;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Successful!</h1>
        <p>Thank you for registering.</p>
        <a href="signin.html">Login Now</a>
    </div>
</body>
</html>

