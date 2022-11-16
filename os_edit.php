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
    $phoneObj = new Phone();
    $phone = $phoneObj->all();
    $brandObj = new Brand();
    $brand = $brandObj->all();
    $osObj = new Os($id);
    $os = $osObj->detail($id);
    $phoneinos = $osObj->phoneInOs($id);
    include 'view/os_edit/home.php';
}  
else
header('location:index.php');  