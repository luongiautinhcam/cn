<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$phone = new Phone();
$phone->update();
header('location:phone_edit.php');