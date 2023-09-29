<?php
session_start();

include_once('conexao.php');

if(!isset($_SESSION['ra']) == true ) 
{
  unset($_SESSION['ra']);
;
header('Location: login.php');
}
if(isset($_GET['id']) ){
$equip = $_GET['equipamento'];
$quant = $_GET['quantidade'];
$id = $_GET['id'];


if(!isset($_GET['q'])){
$query = "UPDATE  estoque SET disponivel = disponivel + '$quant' where id = '$equip'";
mysqli_query($con,$query) or die(mysqli_error($con));
$link='?id='.$id;
header("Location: delete.php$link");
}

}
else  
	
 if(isset($_GET['equipamento']) ){
$equip = $_GET['equipamento'];
$quant = $_GET['quantidade'];

$query = "UPDATE  estoque SET disponivel = disponivel - $quant where id = '$equip'";

mysqli_query($con,$query) or die(mysqli_error($con));

header("Location: home_user.php");
}





?>