<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$phone = new Phone();
$phone->add();
header('location:phone.php');