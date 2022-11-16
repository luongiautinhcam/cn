<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";
}
spl_autoload_register('loadClass');

$os = new Os();
$os->add();
header('location:os.php');