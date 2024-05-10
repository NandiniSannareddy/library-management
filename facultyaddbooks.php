<?php

$connect=mysqli_connect("localhost", "root", "", "library_management");


$result=mysqli_query($connect, "SELECT * FROM books ");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        body {
            background-color: #B6E2D3;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        div {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #image {
            width: 100px;
            height: auto;
        }

        #btn {
            text-align: center;
            margin-bottom: 20px;
        }

        #btn1 {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        #btn1:hover {
            background-color: #45a049;
        }

        .edit-btn, .delete-btn {
            padding: 6px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .edit-btn:hover, .delete-btn:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            th, td {
                padding: 8px;
            }
            div{
        font-size:0.5rem;
        
                 }
            #image {
                width: 80px;
            }
        }
    </style>
    </head>
    <body>
        <form>
            <div id="btn">  <button id="btn1" formaction="addfacultybooks.html">Add new books </button> </div>  
        </form>
        <div>
        <table border="1">
              
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Link</th>
            </tr>
            
            
            <?php
               while($row=mysqli_fetch_assoc($result))
                {
                   $id= $row['id'];
            ?> <tr>
                
                <td > <?php echo '<img src="data:image;base64, '.base64_encode($row['image']).' " id="image" >' ?> <br>  </td>   
                <td> <?php echo $row['title'] ?> </td>
                <td> <?php echo $row['author'] ?> </td>
                <td> <?php echo '<a href=" '.$row['link'].' "> click here </a>' ?> </td>
                 </tr>
            <?php
               }
            ?>
                
           
        </table>
        </div>
     
    </body>
</html>


