<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    

   

    <title>Fitness</title>
</head>

<body>
   <div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FITNESS ENTHUSIAST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <?php if (!isset($_SESSION['user'])): ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contct Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register Teacters</a>
        </li>
       
        <div class="d-flex">
        <a href="admin.php">
        <button class="btn btn-outline-danger" type="submit">Admin</button>
        </a>  
        </div>
        
        

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <li class="nav-item">
          <a class="nav-link" href="managehall.php">Manage Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Reagister Teacters</a>
        </li>
        <div class="d-flex ">
        <a href="logout.php"><button class="btn btn-outline-danger" type="submit">Logout</button></a>
        </div>  
       </ul>


        
        
         
        <?php else: ?>
        <div class="d-flex" role="search">
        <button class="btn btn-outline-danger" type="submit">Logout</button>
        </div>
        <?php endif; ?>    
    </div>
  </div>
</nav>

</div>
        </body>
        </html>