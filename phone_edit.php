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
    $detail = $phone->detail($id);
    $brandObj = new Brand();
    $brand = $brandObj->all();
    $osObj = new Os();
    $os = $osObj->all();
    include 'View/phone_edit/home.php';
}  
else
header('location:index.php');  