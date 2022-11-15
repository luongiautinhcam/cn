<?php
if(!isset($_SESSION)) session_start();
$u = isset($_POST['user'])?$_POST['user']:'';
$p = isset($_POST['password'])?$_POST['password']:'';
//hop le: u=admin, p =123456
$p = md5($p);//da ma hoa
include'./connect.php';
$sql ="select * from admin where username='$u' and password='$p'";
//echo $sql; exit;
$stm = $pdo->query($sql);
$soketqua = $stm->rowCount();
echo($soketqua);
//echo "Co $soketqua "; exit;
//if($u=='admin' && $p=='123456') //kiem tra cuc bo
if($soketqua>0)
{
    $row = $stm->fetch();//lay ra 1 dong ket qua
    $_SESSION['login']=1;
    $_SESSION['thongtin']=['username'=> $row['username'],'name'=>$row[ 'name']];
    header('location:./index.php');
    exit;
}
setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
header('location:login.html');

