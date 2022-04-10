<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Registration Page</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">

    <!-- Google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=PT+Serif:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<body class = "bg-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">Voting System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="registration.php">Register</a>
        </li>
       
        
      </ul>
    </div>
  </div>
</nav>

    <!-- Login Form -->
    <div class="forms w-100 text-center py-4 ">
        <h2 class = "text-center">Registration Page</h2>
        <div class="form  my-4">
            <form action="register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                   <input type="text" name="username" placeholder="Enter your full name" required = "required" class="form-control w-50 m-auto" >
                </div>

                <div class="mb-3">
                   <input type="text" name="mobile" placeholder="Enter your phone number" required = "required"  class="form-control w-50 m-auto" maxlength="10" minlength="10" >
                </div>

                <div class="mb-3">
                   <input type="text" name="pswd" placeholder="Enter your password" required = "required"  class="form-control w-50 m-auto" >
                </div>

                <div class="mb-3">
                   <input type="text" name="cpswd" placeholder="Confirm password" required = "required"  class="form-control w-50 m-auto" >
                </div>

                <div class="mb-3">
                   <input type="file" name="photo" required = "required"  class="form-control w-50 m-auto" >
                </div>



                <div class="mb-3">
                    <select name="option" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>

                <button type="submit" class="btn my-4 bg-info ">Register</button>
                <p>Already have an account ?
                    <a href="index.php" class="text-white">Login here </a>
                </p>

                

            </form>
        </div>
    </div>
    <div class="footer">
        <pre class="text-center text-white">© Copyright 2021 Right2Vote. All Rights Reserved.</pre>
        <p class="text-center text-white">Vote, it is your Right and Responsibility</p>
    </div>
</body>
</html>