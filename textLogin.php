<?php 
include_once('conexao.php');
session_start();

if(!empty($_POST['ra']))
{

$ra= $_POST['ra'];


$sql =" SELECT * FROM usuario WHERE ra = '$ra' ";
 
$result = $conexao->query($sql);

print_r($result);

if(mysqli_num_rows($result) < 1){
    unset($_SESSION['ra']);
    
header('Location: login.php');

} else {
   header('Location: home.php'); 

   $_SESSION['ra']= $ra;
  
}


}else{
    header('location: login.php');
}

?>