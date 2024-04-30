<?php
$cookie_name = "user";
$cookie_value = "Ergys";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 day
?>
<html>
    <body>


<?php
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>

</body>
</html>
