<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$brand = new Brand();
$brand->add();
header('location:brand.php');