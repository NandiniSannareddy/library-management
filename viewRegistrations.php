<?php

$connect= mysqli_connect('localhost', 'root', '', 'library_management');


/*$name= $_POST['name'];
$fname= $_POST['fname'];
$email= $_POST['email'];
$password= $_POST['password'];*/

   
$display=mysqli_query($connect, "SELECT fullname, rollno, email, username FROM registrations");



?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <style>
        body {
            background-color: #B6E2D3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #container {
            width: 90%;
            max-width: 800px;
            margin: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 12px;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(odd) {
            background-color: #D4F1F4;
        }

        @media (max-width: 600px) {
           
            body{
        font-size:0.5rem;
        display:block;
    }
    th, td{
        padding:2px;
    }
    table{
        height: 100%;
    }
        }
    </style>
   
    </head>
    <body>
        
        <div>
            <center>  <h1> Registrations Table </h1> </center>
            <table>
                <tr>
                    
                    <th>Full Name</th>
                    <th>Roll Number</th>
                    <th>Email</th>
                    <th>Username</th>
                    
                </tr>
                <?php
                  while($row=  mysqli_fetch_assoc($display) )
                  {
                      
                ?>
                <tr>
                    
                    <td> <?php echo $row['fullname']  ?></td>
                    <td> <?php echo $row['rollno']  ?></td>
                    <td> <?php echo $row['email']  ?></td>
                    <td> <?php echo $row['username']  ?></td>
                    
                </tr>
                
                <?php
                  }
                  ?>
            </table>
        </div>
    </body>
</html>


