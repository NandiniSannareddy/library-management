          
<?php

$connect=mysqli_connect("localhost", "root", "", "library_management");


   /* $title=$_POST['title'];
    $author=$_POST['author'];
    $photo=$_FILES['photo']['name'];
    $link=$_POST['link'];*/

$result=mysqli_query($connect, "SELECT * FROM books ");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
         
         
        body {
            background-color: #F2D0C1;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }
        #image{
       width:100px;
        height:100px;
     }
        #book {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            word-wrap: break-word;
        }

        th {
            background-color: #F6C7A5;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        @media only screen and (max-width: 600px) {
            th, td {
                padding: 8px;
            }

            #book {
                font-size: 1.5rem;
            }
             div{
        font-size:0.5rem;
        
    }
    #image{
       width:60px;
        height:60px;
     }
        }


    </style>
    </head>
    <body>
        
        <center id="book"> Books </center> <br> <br>
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
                
                <td > <?php echo '<img src="data:image;base64, '.base64_encode($row['image']).' " id="image" >' ?>  </td>   
                <td style="max-width: 200px;"> <?php echo $row['title'] ?></td>
                <td > <?php echo $row['author'] ?> </td>
                <td > <?php echo '<a href=" '.$row['link'].' "> click here </a>' ?> </td>
                
                 </tr>
            <?php
               }
            ?>
                
           
        </table>
        </div>
     
    </body>
</html>
         


