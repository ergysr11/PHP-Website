<?php
if(!session_id()){
    session_start();
}
require_once './Users.php';
$user = new Users();
if(!$user->isLoggedIn ()){
    header ("location:/signin.php");
}
?>
<html>    
<title>NIKE</title>
    <link rel="stylesheet" type="text/css" href="index.css">

    <body>
<nav class="navbar"> 
        <ul>
    <li><a href='Home.com' >Home</a> </li>
    <li><a href='/checkout.php' >Cart
    <?php
                    require_once "./Cart.php";
                    $cart = new Cart();
                    $nrOfProducts = $cart->getNrOfProducts ();
                    if($nrOfProducts>0){
                        ?>
                <span class="badge rounded-pill bg-danger"><?php echo $nrOfProducts; ?> </span>
                <?php
                    }
                ?>
    </a> </li>
    <li><a href='/productShow.php' >Products</a> </li>    
    <li><a href='/logout.php' >Logout</a> </li> 
</ul>
</nav>

 
    <h1>Just Do It</h1>
<div id="link"><a href="https://www.instagram.com/nike/"><img src="Images/new-Instagram-logo-png-full-colour-glyph.png" width="30px" height="30px"> </a>   </div>

<div id="link"><a href="https://www.facebook.com/nike/?locale=sq_AL"><img src="Images/facebook.png" width="30px" height="30px"> </a>   </div>

<div id="link"><a href="https://www.tiktok.com/@nike"><img src="Images/tiktok.png" width="30px" height="30px"> </a>   </div>


    </body>
</html> 