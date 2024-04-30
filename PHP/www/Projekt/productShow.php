<link rel="stylesheet" type="text/css" href="productShow.css">
<?php
require_once './db/products.php';
require_once './Product.php';
$raw_products = getAllProducts ();
$products=[];

foreach ($raw_products as $p){
    array_push ($products,new Product($p['id'],$p['name'],$p['price'],$p['image']));
}
?>
<?php
    echo '<div class="container">';
         echo '<div class="row">';
         foreach ($products as $product){
             echo "<div class='col-4'>";
                include "./ProductCard.php";
             echo '</div>';
         }
         echo '</div>';
    echo '</div>';
?>