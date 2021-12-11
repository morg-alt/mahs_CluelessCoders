<?php
    require "header.php";
?>

<main>
<header class = 'header2'><div class='container'><h2 class= 'header-text'>Signup Here</h2></div></header>
    
    <br>
    <br>
    <br>
    <br>
    <form action="includes/signup.inc.php" method="post" class="row g-3 sign_up">
        <div class="col-md-6">
            <input type="text" name="uid" class="form-control sign_up" placeholder="Username">
        </div>
        <div class="col-md-6">
            <input type="password" name="pwd" class="form-control sign_up" placeholder="Password">
        </div>
        <div class="col-12">
            <button name="signup-submit" type="submit" class="btn btn-primary signup-btn">Sign up</button>
        </div>
        <div class="col-md-6">
            <input type="text" name="mail" class="form-control sign_up" placeholder="E-Mail">
        </div>
        <div class="col-md-6">
            <input type="password" name="pwd-repeat" class="form-control sign_up" placeholder="Repeat-Rassword">
        </div>  

        
    </form>

</main>

<?php
    require "footer.php";
?>