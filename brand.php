<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$myphone = new Phone();
$kw = isset($_GET['keyword'])?$_GET['keyword']:'';
$os_id = isset($_GET['os_id'])?$_GET['os_id']:'';
$brand_id = isset($_GET['brand_id'])?$_GET['brand_id']:'';


$data = $myphone->all();
//$data = $myphone->search($kw,$os_id,$brand_id);
$n = $myphone->n;

$myos = new Os();
$dataOs = $myos->all();

$mybrand = new Brand();
$dataBrand = $mybrand->all();
include "./view/brand/home.php";