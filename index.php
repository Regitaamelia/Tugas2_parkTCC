<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <center><br/>
    <h2><strong>ANGGOTA KOST ASRI JAYA</strong></h2><br/>
    
    <a href="add.php"><i>Add New Member</i></a><br/><br/>
 
    <table class="table table-success table-striped" width='80%' border=4 >
 
    <tr>
        <th>NAME</th> 
        <th>MOBILE</th> 
        <th>EMAIL</th> 
        <th>UPDATE 1</th>
        <th>UPDATE 2</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a></td>";   
        echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td>";   
        echo "</tr>";  
    }
    ?>
    </table>
    </center>
</body>
</html>
