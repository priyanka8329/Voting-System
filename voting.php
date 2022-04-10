<?php
session_start();

// connect to the database
include('connect.php');

// accesing the group votes and increment the value
$votes = $_POST['gvotes'];
$totalvotes = $votes + 1;

// accesing the group id and user id 
$gid = $_POST['gid'];
$uid = $_SESSION['id'];

// update the votes
$updatevotes = mysqli_query($con, "update `userdata` set voter = '$totalvotes' where id = '$gid' ");

// update the status
$updatestatus = mysqli_query($con, "update `userdata` set status = 1 where id = '$uid' ");

if($updatevotes and $updatestatus){
    $groupresult = mysqli_query($con,"Select username, photo, voter, id from `userdata` where standard = 'group' ");
    $groups = mysqli_fetch_all($groupresult, MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status'] = 1;
    echo '<script>
    alert("Voting successful !");
    window.location = "dashboard.php";
    </script>';

}

else{
    echo '<script>
    alert("Voting unsuccessful ! Please try again");
    window.location = "dashboard.php";
    </script>';
}

?>