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
    $brand = $brandObj->detail($id);
    $phoneinbrand = $brandObj->phoneInBrand($id);
    $osObj = new Os();
    $os = $osObj->all();
    include 'view/brand_edit/home.php';
}  
else
header('location:index.php');  