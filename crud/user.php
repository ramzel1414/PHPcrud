<?php
    include 'connect.php';
    
    if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql = "insert into `crud` (name,email,mobile,password) values('$name', '$email', '$mobile', '$password')";
        $result = mysqli_query($con, $sql);
        if($result){

            // echo "Data inserted successfully";
            header('location:display.php');
        } else {
            die(mysqli_error($con));
            
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD Operation</title>

</head>
<body>
    <div class="container my-5">

        <form method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <label>Mobile:</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile">
            </div>
            <div class="form-group">
                <label>Passwprd:</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            
            
  
                <button class="btn btn-primary my-5"><a href="display.php" class="text-light">View Table</a></button>
         </form>
    </div>
</body>
</html>