<?php 
include_once('conexao.php');
session_start();

if(!empty($_POST['ra']))
{

$ra= $_POST['ra'];

print_r($ra);
$sql =" SELECT * FROM usuario WHERE ra = '$ra' ";
 
$result = mysqli_query($con, $sql);

print_r($result);

if(mysqli_num_rows($result) < 1){
    unset($_SESSION['ra']);
    
header('Location: login.php');

} else {
 while($user_data = mysqli_fetch_assoc($result))
{

 
   $_SESSION['ra']= $ra;
    $nome =$user_data['Nome_completo'];
    
	$funcao= $user_data['funcao'];

   $_SESSION['nome']= $nome;
   
  $_SESSION['funcao'] = $funcao; 
  
  header('Location: home_user.php'); 
} 

 
}



}else{
    header('location: login.php');
}

?>