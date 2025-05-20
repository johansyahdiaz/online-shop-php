<?php
define("BASE_URL", "http://localhost/online-shop/online-shop-php/");

function direct($url)
{
    echo "<script> window.location = '$url'; </script>";
    exit;
}

function rupiah($nilai = 0)
{
    $string = "Rp," . number_format($nilai);
    return $string;
}
