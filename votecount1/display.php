
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Testimonial Sample</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .table{
    border: 1px solid black;
  }
  </style>
</head>
<body>

<div class="container">
  <h2>URL for the result</h2>
              
  <table class="table">
    <thead>
      <tr>
        
        <th>URL</th>
      </tr>
    </thead>
    <tbody>
    <a href="logout.php">Logout</a>
    
    <?php

    $servername="localhost";
    $username="root";
    $password="";
    $database="insert";

    $conn=mysqli_connect($servername,$username,$password,$database);

    $sql = "select * from form ORDER BY id";

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result))
    {
      echo '<tr>';
      
      echo '<td>'.$row['url'].'</td>';
      echo '</tr>';
    }
    ?>
    </tbody>
    </table>
    </div>

    </body>
    </html>