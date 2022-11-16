<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$brand = new Brand();
$brand->update();
header('location:brand.php');