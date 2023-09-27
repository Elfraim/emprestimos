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

$id = $_GET['id'];


$query = "DELETE FROM  emprestimo where id= '$id' ";

mysqli_query($con,$query) or die(mysqli_error($con));


header("Location: home_user.php");
}




?>