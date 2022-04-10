<?php
error_reporting(0);

// connect to the database
include('connect.php');

// Accessing the variables
$username = $_POST['username'];
$phone = $_POST['mobile'];
$password = $_POST['pswd'];
$cpassword = $_POST['cpswd'];
$photo = $_FILES['photo']['name'];
$temp_name = $_FILES['photo']['temp_name'];
$std = $_POST['option'];

if($password!=$cpassword){
    echo '<script>
    alert("Password do not match ! Please try again");
    window.location = "registration.php";
    </script>';
}

else{
    move_uploaded_file($temp_name, "photo");
    $sql = "insert into `userdata` (username, phonenumber, password, photo,  standard, status, voter) values('$username', '$phone', '$password', '$photo', '$std',0,0)";
    $result = mysqli_query($con,$sql);

    if($result){
        echo '<script>
        alert("Registration Successful");
        window.location = "index.php";
        </script>';
    }
}




?>