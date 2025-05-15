<?php
define("BASE_URL", "http://localhost/online-shop/online-shop-php/");

function direct($url)
{
    echo "<script> window.location = '$url'; </script>";
    exit;
}
