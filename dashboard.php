<?php

session_start();
if(!isset($_SESSION['id'])){
    header('location:index.php');
}
$data = $_SESSION['data'];
if($_SESSION['status']==1){
    $status = '<b class="text-light">Voted</b>';  
}

else{
    $status = '<b class="text-light">Not Voted</b>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Dashboard</title>

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">

    <!-- Google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=PT+Serif:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>

<body class="bg-secondary text-light">
    <div class="container my-5">
        <div class="box text-end">
        <a href="index.php"><button class="btn btn-dark text-light px-3 m-2">Back</button></a>         
        <a href="logout.php"><button class="btn btn-dark text-light px-3 m-2">Logout</button></a> 
        </div>       

        <h1 class="my-4 text-center">Voting System</h1>

        <!-- Group and profile -->
        <div class="row my-5">
            <div class="col md-7">
                <?php
                if(isset($_SESSION['groups'])){
                     $groups = $_SESSION['groups'];
                     for($i=0;$i<count($groups);$i++){
                         ?>
                        <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo $groups[$i]['photo'] ;?>" alt="image1">
                       </div>
                       <div class="col md-8">
                         <b class="text-dark h4">Group :
                         <?php echo $groups[$i]['username'] ;?> </b><br><br>
                         <b class="text-dark h4">Votes : </b>
                         <?php echo $groups[$i]['voter'] ;?><br><br>

             </div>
         </div>
         
         <form action="voting.php" method="POST">
             <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['voter'] ;?>">
             <input type="hidden" name="gid" value="<?php echo $groups[$i]['id'] ;?>">

             <?php
             if($_SESSION['status'] == 1){
                 ?>
                 <button class="bg-success text-white my-3 px-3">Voted</button>
                 <?php
             }
             else{
                 ?>
                 <button class="bg-danger text-white my-3 px-3" type="submit">Vote</button>
                 <?php

             }
             ?>

         </form>
         <hr>
         
         <?php

  }

  }   

      else{
          ?>
          <div class="container">
              <p>No groups to display</p>
          </div>
          <?php

    }
                ?>
         </div>
            <div class="col md-5">
            <!-- user profile -->
            <img src="<?php echo $data['photo'] ?>" alt="image2"><br><br>
            <b class="text-dark h4">Name : </b>
            <?php echo $data['username']; ?><br><br>
            <b class="text-dark h4">Mobile : </b>
            <?php echo $data['phonenumber']; ?><br><br>
            <b class="text-dark h4">Status : </b>
            <?php echo $status; ?><br><br>
                    

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>