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
else
if(isset($_GET['eid']) ){

  $id = $_GET['eid'];
  
  
  $query = "DELETE FROM  emprestimo where equipamento= '$id' ";
  
  mysqli_query($con,$query) or die(mysqli_error($con));
  
  $query = "DELETE FROM  estoque where id= '$id' ";
  
  mysqli_query($con,$query) or die(mysqli_error($con));

  header("Location: home_user.php");
  }else
  if(isset($_GET['uid']) ){

    $id = $_GET['uid'];
    
    
    $query = "DELETE FROM  usuario where id= '$id' ";
    
    mysqli_query($con,$query) or die(mysqli_error($con));
    
    header("Location: home_user.php");
    }




?>