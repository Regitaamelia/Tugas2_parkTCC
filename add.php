<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Members</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <center><br/>
    <h3><strong>Masukkan Data Anggota</strong></h3><br/>

    <a href="index.php"><i>Go to Home</i></a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table class="table table-success table-striped" width="25%" border="4">
            <tr> 
                <td><strong>Name</strong></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td><strong>Email</strong></td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td><strong>Mobile</strong></td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
    </center>
</body>
</html>








