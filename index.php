<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
    // echo "Sucess connecting to the db";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = " INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;
    if($con->query($sql) == true){
        $sumbit = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO TRAVEL FROM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="Delhi.jpg" alt="image">
    <div class="container">
        <h2>Welcome to Trip</h3>
        <p>Enter your details and Submit this from to confrim your participation in the trip.</p>
   
       <?php
       if ($insert == true) {
           echo "<p class='submitMsg'>Thanks for submitting your form!</p>";
       }
       ?>
       
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            
            <input type="text" name="age" id="age" placeholder="Enter your age">
            
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">

            <input type="email" name="email" id="email" placeholder="Enter your email">

            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your equery">         
            </textarea>
            <span class="butns">
                <button class="btn">Submit</button>
            </span>


        </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>