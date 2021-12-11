<?php
    require "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <br>
    <br>
    <header name="header" class="header">
        <div class="container">
            <h1 class="header-text">A.B.A.P.A</h1>
            <h3 class="header-text2">Animal Battle And Protective Armor</h3>
        </div>
    </header>
    <br>
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\Gorilla-Armor3.jpg" class="d-block w-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">Bartholemue The Great</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\Dog-Armor3.jpg" class="d-block w-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">The Duke of Dogville</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\Mouse-Armor1.jpg" class="d-block w-50 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">Armor of Mouseth</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
<br>
<br>




    <?php
    require "footer.php";
?>