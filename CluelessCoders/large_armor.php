<?php
    require "header.php";
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://drive.google.com/uc?export=view&id=1KVuZBKrtuyn7Uf8Ej99b-e0DTBYHmHNG" class="d-block w-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">The Hired Horn</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=10EYQ6s0lMod5A7TVri6dK1inyE3-Ax54" class="d-block w-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">D A V E Bringer Of destruction</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1wRDKRpkHNlfniiaqpoTFTkyv_QHP96lx" class="d-block w-50 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">The Bearer Of Bad News</h5>
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

<!--Products-->
<section id="products" class="products py-5">
  <div class="container">
    <!--Section Title-->
    <header name="header" class="header">
        <div class="container">
            <h1 class="header-text">Large Armor</h1>
        </div>
    </header>
     <!--Products items-->
    <div class="row product-items" id="product-items">
      <!--Single item-->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 text-color">
        <br>
        <br>
        <br>
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1Yo9LhCbODrNSMpiXii270ZiZb8sdoUM7" alt="Bird 1" class="card-image-top product-img mx-auto">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <button id="btn">Gorlia Armor</button>
              <table id="h1" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price:</td>
        </tr>

        <?php

          include "includes/dbh.inc.php";

          $products = mysqli_query($conn,"select * from armors WHERE armorID = 9");

          while($data = mysqli_fetch_array($products))
          {

        ?>
        <tr>
          <td><?php echo $data['armorName']; ?></td>
          <td><?php echo $data['armorDesc']; ?></td>
          <td><?php echo $data['armorPrice']; ?></td>
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
            <img src="https://drive.google.com/uc?export=view&id=1XJP22D24fwkWEslMZ8jtH0cUHPCNzApJ" alt="Bird 2" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn2">Rhino Armor</button>
              <table id="h2" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php

  

          $products2 = mysqli_query($conn,"select * from armors WHERE armorID = 53");

          while($data2 = mysqli_fetch_array($products2))
          {

        ?>
        <tr>
          <td><?php echo $data2['armorName']; ?></td>
          <td><?php echo $data2['armorDesc']; ?></td>
          <td><?php echo $data2['armorPrice']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn10"><a href="purchase.php">Buy Now </a></button>
      </table>

 

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
            <img src="https://drive.google.com/uc?export=view&id=1SGwL_K78DP-Vkaw-vK4_LVR5trQSbG7F" alt="Guinea Pig Armor" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn3">Lion Armor</button>
              <table id="h3" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products3 = mysqli_query($conn,"select * from armors WHERE armorID = 54");

          while($data3 = mysqli_fetch_array($products3))
          {

        ?>
        <tr>
          <td><?php echo $data3['armorName']; ?></td>
          <td><?php echo $data3['armorDesc']; ?></td>
          <td><?php echo $data3['armorPrice']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn11"><a href="purchase.php">Buy Now </a></button>
      </table>



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
            <img src="https://drive.google.com/uc?export=view&id=1XGTbMFz284nKFUJvnDye8p7978mjlybi" alt="Thing 2" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn4">Wolf Armor</button>
              <table id="h4" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products4 = mysqli_query($conn,"select * from armors WHERE armorID = 55");

          while($data4 = mysqli_fetch_array($products4))
          {

        ?>
        <tr>
          <td><?php echo $data4['armorName']; ?></td>
          <td><?php echo $data4['armorDesc']; ?></td>
          <td><?php echo $data4['armorPrice']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn12"><a href="purchase.php">Buy Now </a></button>
      </table>



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
            <img src="https://drive.google.com/uc?export=view&id=1Tb780YrMQxoZNhP1KMcTdaY-1E5iqcIn" alt="Mouse 1" class="card-image-top product-img big-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn5">Cow Armor</button>
              <table id="h5" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products5 = mysqli_query($conn,"select * from armors WHERE armorID = 56");

          while($data5 = mysqli_fetch_array($products5))
          {

        ?>
        <tr>
          <td><?php echo $data5['armorName']; ?></td>
          <td><?php echo $data5['armorDesc']; ?></td>
          <td><?php echo $data5['armorPrice']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn13"><a href="purchase.php">Buy Now </a></button>
      </table>


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
            <img src="https://drive.google.com/uc?export=view&id=1yGS-JvuRbiMFn17aB9cbtsHrbj4zOqm7" alt="frog_armor" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn6">Elephant Armor</button>
              <table id="h6" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products6 = mysqli_query($conn,"select * from armors WHERE armorID = 52");

          while($data6 = mysqli_fetch_array($products6))
          {

        ?>
        <tr>
          <td><?php echo $data6['armorName']; ?></td>
          <td><?php echo $data6['armorDesc']; ?></td>
          <td><?php echo $data6['armorPrice']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn14"><a href="purchase.php">Buy Now </a></button>
      </table>


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
            <img src="https://drive.google.com/uc?export=view&id=1grz1UU4oqtQLA7hR_0M1ugCMYz6otL2b" alt="" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn7">Halo Bear armor</button>
              <table id="h7" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products7 = mysqli_query($conn,"select * from armors WHERE armorID = 22");

          while($data7 = mysqli_fetch_array($products7))
          {

        ?>
        <tr>
          <td><?php echo $data7['armorName']; ?></td>
          <td><?php echo $data7['armorDesc']; ?></td>
          <td><?php echo $data7['armorPrice']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn15"><a href="purchase.php">Buy Now </a></button>
      </table>



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
            <img src="https://drive.google.com/uc?export=view&id=16lo1V6ZD-SGOebijnHuc3wizBjkoC_pK" alt="" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn8">Horse Armor</button>
              <table id="h8" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products8 = mysqli_query($conn,"select * from armors WHERE armorID = 57");

          while($data8 = mysqli_fetch_array($products8))
          {

        ?>
        <tr>
          <td><?php echo $data8['armorName']; ?></td>
          <td><?php echo $data8['armorDesc']; ?></td>
          <td><?php echo $data8['armorPrice']; ?></td>
        </tr>
        <?php
          }
        ?>
        <button id="btn16"><a href="purchase.php">Buy Now </a></button>
      </table>

      <?php mysqli_close($conn); ?>

            </div>
          </div>
        </div>
      </div>
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
        btn5.addEventListener('click', function () {
          h5.hidden = !h5.hidden;
        }, false);
        btn6.addEventListener('click', function () {
          h6.hidden = !h6.hidden;
        }, false);
        btn7.addEventListener('click', function () {
          h7.hidden = !h7.hidden;
        }, false);
        btn8.addEventListener('click', function () {
          h8.hidden = !h8.hidden;
        }, false);
        btn9.addEventListener('click', function () {
          h9.hidden = !h9.hidden;
        }, false);
        btn10.addEventListener('click', function () {
          h10.hidden = !h10.hidden;
        }, false);
        btn11.addEventListener('click', function () {
          h11.hidden = !h11.hidden;
        }, false);
        btn12.addEventListener('click', function () {
          h12.hidden = !h12.hidden;
        }, false);
        btn13.addEventListener('click', function () {
          h13.hidden = !h13.hidden;
        }, false);
        btn14.addEventListener('click', function () {
          h14.hidden = !h14.hidden;
        }, false);
        btn15.addEventListener('click', function () {
          h15.hidden = !h15.hidden;
        }, false);
        btn16.addEventListener('click', function () {
          h16.hidden = !h16.hidden;
        }, false);

      </script>
      <?php
    require "footer.php";
?>