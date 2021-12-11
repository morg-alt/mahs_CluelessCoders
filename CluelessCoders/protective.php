<?php
    require "header.php";
?>

<!--Products-->
<section id="products" class="products py-5">
  <div class="container">
    <!--Section Title-->
    <header class = 'header'>
      <div class='container'>
        <h2 class= 'header-text'>Protective Services</h2>
      </div>
    </header>
    <!--End of Section Title-->

    <!--Products items-->
    <div class="row product-items" id="product-items">
      <!--Single item-->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 text-color">
        <br>
        <br>
        <br>
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1V0zq1Fru8iGWpKPb3XXPbtXvkZTSPrcy" alt="Bird 1" class="card-image-top product-img mx-auto">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <button id="btn">Penguin Armor</button>
              <table id="h1" hidden>
        <tr>
          <td>Name:</td>
          <td>type:</td>
          <td>Price</td>
        </tr>

        <?php

          include "includes/dbh.inc.php";

          $products = mysqli_query($conn,"select * from animalServices WHERE serviceID = 7");

          while($data = mysqli_fetch_array($products))
          {

        ?>
        <tr>
          <td><?php echo $data['animal']; ?></td>
          <td><?php echo $data['type']; ?></td>
          <td><?php echo $data['price']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn12"><a href="purchase.php">Buy Now </a></button>
      </table>



              <br>
            </div>
          </div>
        </div>
      </div>
      <!--End of Single item-->
      <!--Single item-->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 text-color">
        <br>
        <br>
        <br>
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1uOEDaIlmG2nwZ3rWsfR0JfK7vXxuyVRx" alt="Bird 2" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn2">Cat Armor</button>
              <table id="h2" hidden>
              <tr>
          <td>Name:</td>
          <td>type:</td>
          <td>Price</td>
        </tr>

        <?php

          include "includes/dbh.inc.php";

          $products = mysqli_query($conn,"select * from animalServices WHERE serviceID = 8");

          while($data = mysqli_fetch_array($products))
          {

        ?>
        <tr>
          <td><?php echo $data['animal']; ?></td>
          <td><?php echo $data['type']; ?></td>
          <td><?php echo $data['price']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn11"><a href="purchase.php">Buy Now </a></button>
      </table>



              <br>
            </div>
          </div>
        </div>
      </div>
      <!--End of Single item-->
      <!--Single item-->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 text-color">
        <br>
        <br>
        <br>
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=10EYQ6s0lMod5A7TVri6dK1inyE3-Ax54" alt="Guinea Pig Armor" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn3">Elephant Armor</button>
              <table id="h3" hidden>
              <tr>
          <td>Name:</td>
          <td>type:</td>
          <td>Price</td>
        </tr>

        <?php

          include "includes/dbh.inc.php";

          $products = mysqli_query($conn,"select * from animalServices WHERE serviceID = 3");

          while($data = mysqli_fetch_array($products))
          {

        ?>
        <tr>
          <td><?php echo $data['animal']; ?></td>
          <td><?php echo $data['type']; ?></td>
          <td><?php echo $data['price']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn9"><a href="purchase.php">Buy Now </a></button>
      </table>



              <br>
            </div>
          </div>
        </div>
      </div>
      <!--End of Single item-->
      <!--Single item-->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 text-color">
        <br>
        <br>
        <br>
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1JUK9d6sUBOQx-tzZIunU7Bd-BeoXvHbV" alt="Thing 2" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn4">Groundhog Armor</button>
              <table id="h4" hidden>
              <tr>
          <td>Name:</td>
          <td>type:</td>
          <td>Price</td>
        </tr>

        <?php

          include "includes/dbh.inc.php";

          $products = mysqli_query($conn,"select * from animalServices WHERE serviceID = 10");

          while($data = mysqli_fetch_array($products))
          {

        ?>
        <tr>
          <td><?php echo $data['animal']; ?></td>
          <td><?php echo $data['type']; ?></td>
          <td><?php echo $data['price']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn10"><a href="purchase.php">Buy Now </a></button>
      </table>

    <?php mysqli_close($conn); ?>

            </div>
          </div>
        </div>
      </div>
      <!--End of Single item-->

     


      <!--End of Single item-->
      <script>
        btn.addEventListener('click', function () {
          h1.hidden = !h1.hidden;
        }, false);
        btn2.addEventListener('click', function () {
          h2.hidden = !h2.hidden;
        }, false);
        btn3.addEventListener('click', function () {
          h3.hidden = !h3.hidden;
        }, false);
        btn4.addEventListener('click', function () {
          h4.hidden = !h4.hidden;
        }, false);
      </script>
      <?php
    require "footer.php";
?>