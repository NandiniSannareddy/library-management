<?php
$connect= mysqli_connect('localhost', 'root', '', 'library_management');

$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <style>
          /*  body{
                height:100vh;
                display:flex;
                justify-content:center;
                align-items:center;
                background-color:#F9F6F0;
                
            }
            form{
                border:2px solid white;
                width:auto;
                background-color:#F9F9FB;
                height:40vh;
                padding:8px;
                box-shadow: 10px 15px whitesmoke ; 
            }
            center{
                font-size:2rem;
                color:#6F5B3E;
            }*/     body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #F9F6F0;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        form {
            border: 2px solid #6F5B3E;
            width: 50%;
            max-width: 400px;
            background-color: #F9F9FB;
            height: auto;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        center {
            font-size: 2rem;
            color: #6F5B3E;
            margin-bottom: 20px;
        }

        input[type='file'] {
            display: block;
            margin-bottom: 20px;
        }

        input[type='submit'] {
            background-color: #6F5B3E;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type='submit']:hover {
            background-color: #584A35;
        }
        </style>
    </head>
    <body>
        
        <form enctype="multipart/form-data" method="POST">
            <center> UPload new image </center> <br> <br>
            <input type='file' name="photo">
            <br> <br>
            <input type='submit' formaction="edit.php?id=<?php echo $id ?>">
        </form>
    </body>
</html>
