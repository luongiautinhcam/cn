<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$myphone = new Phone();
$Phone = $myphone->all();
$mybrand = new Brand();
$myos = new Os();
$Os = $myos->all();
$Brand = $mybrand->all();
$brand_id = isset($_GET['brand_id'])?$_GET['brand_id']:'';

// $kw = isset($_GET['keyword'])?$_GET['keyword']:'';
// $os_id = isset($_GET['os_id'])?$_GET['os_id']:'';
// $brand_id = isset($_GET['brand_id'])?$_GET['brand_id']:'';

//$data = $myphone->search($kw,$os_id,$brand_id);
$n = $myphone->n;

include "./view/phone/home.php";