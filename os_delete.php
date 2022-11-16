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
    $os = new Os();
    $n = $os->delete($id);
}
header('location:os.php');