<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$id = isset($_GET['id'])?$_GET['id']:'';
if($id !=='')
{
    $phone = new Phone();
    $n = $phone->delete($id);
}
header('location:index.php');