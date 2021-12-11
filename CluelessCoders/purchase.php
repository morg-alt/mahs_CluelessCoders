<?php
    require "header.php";
?>


<header name="header" class="header">

    <div class="container">
        <br>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "invaliduidmail") {
                    echo "<p>Invalid username and e-mail!</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Invalid username!</p>";
                }
                else if ($_GET["error"] == "invalidmailuid") {
                    echo "<p>Invalid e-mail!</p>";
                }       
            }
            else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
                echo '<p>Purchase successful!</p>';
            }
            

        ?>

    <br>
    <form action="includes/purchase.inc.php" method="post" class="row g-3 sign-up">
        <div class="col-md-6">
            <input type="text" name="uidUsers" class="form-control" placeholder="Username">
        </div>
        <div class="col-md-6">
            <input type="text" name="prdtID" class="form-control" placeholder="Product ID">
        </div>
        
        <div class="col-md-6">
            <input type="text" name="uidEmail" class="form-control" placeholder="E-Mail">
        </div>
            <div class="col-12">    
            <button name="signup-submit" type="submit" class="btn btn-primary signup-btn0">Purchase</button>
        </div>
        <br>
    </form>
    </div>
</header>



<?php
    require "footer.php";
?>