<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection to this database failed due to " . mtsqli_connect_error());
}
    // echo"new record added success";
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age ', '$gender', '$email ', '$phone ', '$desc  ', current_timestamp());";
    // echo $sql;
    if($con->query($sql)==true){
        // echo"successfully inserted";
        $insert = true;
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
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Welcome to Travle form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
</head>

<body>
    <img class="gp" src="gp.jpg" alt="gp kashipur" class="container">
    <h1>Welcome to Govt. kashipur information form </h1>
    <p>enter your details and submit this form to comfirm your participation in the trip</p>
   <?php
   if($insert == true){
    echo "<p class='submitMsg'> Thanks for submitting your form.we are happy to see you joining us for the trip</p>";
}
    ?>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enetr your age">
        <input type="text" name="gender" id="gender" placeholder="Enetr your gender">
        <input type="email" name="email" id="email" placeholder="Enetr your email">
        <input type="phonet" name="phone" id="phone" placeholder="Enetr your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">submit</button>


        </div>
        <script src="index.js"></script>
</body>

</html>