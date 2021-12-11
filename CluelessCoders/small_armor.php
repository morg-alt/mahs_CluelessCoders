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
      <img src="https://drive.google.com/uc?export=view&id=1nTej63Q2Oip_sO32mx0qyaCCs2Gh-76X" class="d-block w-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">Striker The Sleuth</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1WwF05gwiwx4j60HeVaQBI2S1PSUgaTrz" class="d-block w-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">The Mogul Mantis</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1pkSiABCryLzMXqMkUNnH7-6erTXvSPgU" class="d-block w-50 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="mx-auto carousel-text">Grease Lightning</h5>
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
            <h1 class="header-text">Small Armor</h1>
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
            <img src="https://drive.google.com/uc?export=view&id=10RikNiulhxIiG-hgMo672WSKuuyfIEp-" alt="Bird 1" class="card-image-top product-img mx-auto">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <button id="btn">Squirrel Armor</button>
              <table id="h1" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price:</td>
        </tr>

        <?php

          include "includes/dbh.inc.php";

          $products = mysqli_query($conn,"select * from armors WHERE armorID = 7");

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
            <img src="https://drive.google.com/uc?export=view&id=1WMxiUo8wrC2jIIy1j13cwtvErP3T0nxy" alt="Bird 2" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn2">Mouse Armor</button>
              <table id="h2" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php

  

          $products2 = mysqli_query($conn,"select * from armors WHERE armorID = 6");

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
            <img src="https://drive.google.com/uc?export=view&id=1CLWtfzwdJD4ie1hTHCuqjD8LyPpGlv0g" alt="Guinea Pig Armor" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn3">Turtle Armor</button>
              <table id="h3" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products3 = mysqli_query($conn,"select * from armors WHERE armorID = 47");

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
            <img src="https://drive.google.com/uc?export=view&id=1q39q5PFiGaxswSt_iNE1fREKp9YRdXT6" alt="Thing 2" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn4">Meerkat Armor</button>
              <table id="h4" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products4 = mysqli_query($conn,"select * from armors WHERE armorID = 23");

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
            <img src="https://drive.google.com/uc?export=view&id=1N52HVmx-FJd1Fz94Cr2ibqiik4eVsSJW" alt="Mouse 1" class="card-image-top product-img big-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn5">Mouse Armor</button>
              <table id="h5" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products5 = mysqli_query($conn,"select * from armors WHERE armorID = 6");

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
            <img src="https://drive.google.com/uc?export=view&id=1a6QWjNk2GXgwlBUVMFwivv4yEnf-OAjB" alt="frog_armor" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn6">Frog Armor</button>
              <table id="h6" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products6 = mysqli_query($conn,"select * from armors WHERE armorID = 46");

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
            <img src="https://drive.google.com/uc?export=view&id=1xT7E6ng2Y1ZJYCwCd1J6KyI1hgqPZJKb" alt="" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn7">frog armor</button>
              <table id="h7" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products7 = mysqli_query($conn,"select * from armors WHERE armorID = 46");

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
            <img src="https://drive.google.com/uc?export=view&id=1u3aFsheRu01SlriAceF2ggna9g76xLlA" alt="" class="card-image-top product-img">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
            <button id="btn8">Mouse Armor</button>
              <table id="h8" hidden>
        <tr>
          <td>Armor Name:</td>
          <td>Armor Description:</td>
          <td>Price</td>
        </tr>

        <?php


          $products8 = mysqli_query($conn,"select * from armors WHERE armorID = 6");

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