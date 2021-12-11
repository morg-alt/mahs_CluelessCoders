<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">
</head>
<?php
    session_start();
?>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a href="index.php"><img src="https://drive.google.com/uc?export=view&id=1o1-FtYzKiFd3rCz8FYdqEmJfaPeMvfi3" class="d-block rounded mx-auto" style="width:150px"></a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li><a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Armor Options
            </a>
            <ul class="dropdown-menu colored" aria-labelledby="navbarDropdown">
              <li class="colores"><a class="dropdown-item" href="small_armor.php">Small Armor</a></li>
              <li class="colores1"><a class="dropdown-item" href="medium_armor.php">Medium Armor</a></li>
              <li class="colores"><a class="dropdown-item" href="large_armor.php">Large Armor</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="history.php">History</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu colored" aria-labelledby="navbarDropdown">
              <li class="colores"><a class="dropdown-item" href="hitman.php">Hitman Services</a></li>
              <li class="colores1"><a class="dropdown-item" href="protective.php">Protective Services</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Sign Up and Log In
            </a>
            <ul class="dropdown-menu colored" aria-labelledby="navbarDropdown">
              <li class="colores"><a class="dropdown-item" href="signup.php">Sign Up</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="nav-item">
                <?php
                
                echo '<class ="login">';
                if (isset($_SESSION["userId"])) {
                    echo '<form action="includes/logout.inc.php" method="post" class="login">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>';
                }
                else {
                    
                    echo '<form action="includes/login.inc.php" method="post" class="login">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit" class="black-text">Login</button>
                </form>';
                }
                ?>
            </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <?php
            if (isset($_SESSION["userId"])) {
              
                echo "<header class = 'header'><div class='container'><h2 class= 'header-text'>You are logged in!</h2></div></header>";
            }
            
            else {
                echo "<header class = 'header'><div class='container'><h2 class= 'header-text'>You are logged out!</h2></div></header>";
            }
        ?>
        <br>
        <br>
        <br>
  <!--End of Navbar-->