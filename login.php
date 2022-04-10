<?php
session_start();
// connect to the database
include('connect.php');

// Accessing the variables
$username = $_POST['username'];
$phone = $_POST['mobile'];
$password = $_POST['pswd'];
$std = $_POST['option'];

$sql = "Select * from  `userdata` where username = '$username' and phonenumber = '$phone' and password ='$password' and standard ='$std'";

// $sql = "Select * from  `userdata` where username = '$username' and phonenumber = '$phone' and password ='$password'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){ 

    $sql = "Select username, photo, voter, id from `userdata` where standard = 'group' ";
    $groupresult = mysqli_query($con, $sql);

    // checking if the group is present or not
    if(mysqli_num_rows($groupresult)>0){
        // fetching all the groups present in the database
        $groups = mysqli_fetch_all($groupresult, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
    }

    // Accessing the user data
    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    // Accessing the entire data from the user data
    $_SESSION['data'] = $data; 

    // going to the info page
    echo '<script>
    window.location = "dashboard.php";
    </script>';

 }

else{
    echo '<script>
    alert ("Invalid Credentials");
    window.location = "index.php";
    </script>';
}

?>