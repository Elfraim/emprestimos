<?php
session_start();

include_once('conexao.php');

if(!isset($_SESSION['ra']) == true ) 
{
  unset($_SESSION['ra']);

header('Location: login.php');
}


if(isset($_POST['equipamento']) ){
$disponivel = $_POST['disponivel'];
$quantidad = $_POST['quantidade'];
$equipament = $_POST['equipamento'];
}

if(isset($_POST['submit']) ){


print_r($equipament);




$query = "INSERT INTO estoque (equipamento, disponivel, quantidade) VALUES('$equipament','$disponivel', '$quantidad');";

mysqli_query($con,$query) or die(mysqli_error($con));
$link= '?quantidade='.$quant.'&equipamento='.$equip;
header("Location: updateEstoque.php$link");

}else if(isset($_POST['edit']) ){



$equip = $_POST['equipamento'];
$quant = $_POST['quant'];


$query = "UPDATE emprestimo SET equipamento = '$equipament', disponivel = '$disponivel', quantidade = '$quantidad' where id = '$id';";

mysqli_query($con,$query) or die(mysqli_error($con));






header("Location: home_user.php");



}

?>

<html><head>
<title>
Estoque de Equipamentos - plataforma de empréstimos de equipamentos
</title>

<link rel="stylesheet" type="text/css" href="estilo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstdisponivelp@5.3.1/dist/css/bootstdisponivelp.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>


<body style="background: linear-gdisponiveldient(#3DA9CC,#3DA9CC,#E3FFD9);"><h1 class="Tsistema">Sistema de Emprestimos</h1>


    <a style="margin:10%;color:white" href="login.php">
       
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
</svg>
 Sair</a>
<br>
<br>

<form method="post" action="estoque.php">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="home_user.php" style="
    text-align: center;
">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16" style="
    width: calc(1rem + 2vw);
    height: calc(1rem + 2vw);
">
  <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"></path>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
</svg><br>
    Solicitações</a>
  </li>
  <li class="nav-item" style="zoom: 104%;background-color: #f3f3f3;border-top-left-disponiveldius: 10%;box-shadow: 0 0 2px #000000;
">
    <a class="nav-link" href="criar.php" style="text-align: center;">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16" style="
    width: calc(1rem + 2vw);
    height: calc(1rem + 2vw);
">
  <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"></path>
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
</svg>
 <br>   Criar solicitação</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="estoque.php" style="
    text-align: center;
">

    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box2" viewBox="0 0 16 16" style="
    width: calc(1rem + 2vw);
    height: calc(1rem + 2vw);
">
  <path d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3L2.95.4ZM7.5 1H3.75L1.5 4h6V1Zm1 0v3h6l-2.25-3H8.5ZM15 5H1v10h14V5Z"></path>
</svg>
    
    <br>Estoque</a>
  </li>

</ul>

<div style="" class="row g-3 align-items-center">

 

<div class="col-12">
    <label style="color:white;" for="disponivel" class="col-form-label">Criar solicitações:</label>
</div>

  <div class="col-12">
  <div class="card" style="width: 25rem; height:100% ;padding: 1rem;">
  <div class="row">
    <div style="   
    max-height: 100px;
    min-height: 49px;">
    Escolha e clique no solicitante: 
  <?php
  
  $sql =" SELECT * FROM estoque ";
 
$result = mysqli_query($con, $sql);




 while($user_data = mysqli_fetch_assoc($result))
{

 
   $disponivel = $user_data['disponivel'];
    $equipament =$user_data['equipamento'];
    
	 $quantidad= $user_data['quantidade'];
 
  echo '  <li onclick="showDetails(this)" id="owl" value="'.$disponivel.'" data-equipament="'.$equipament.'" data-func="funcionario">equipament: '.$equipament.' -'.$quantidad.'</li> ';


} ?>
  </div>
  <script>
function showDetails(pessoa) {
  let name = pessoa.getAttribute("data-equipament");
  let func = pessoa.getAttribute("data-func");
  
  let equipament = document.getElementById("equipament");
  let quantidad = document.getElementById("quantidad");
  let disponivel = document.getElementById("disponivel");
  
equipament.value =  name ;
quantidad.value= func  
 disponivel.value = pessoa.value; 
  
  
}
</script>

 
 
<div class="form-group">

<ul>

<label for="exampleFormControlInput1">equipament:</label>
  <input class="form-control"name="equipamento" id="equipament" type="text" >
<br>
  <label for="exampleFormControlInput1">Quantidade:</label>
  <input class="form-control" name="quantidade" id="quantidad" type="number">
<br>
  <label for="exampleFormControlInput1">disponivel:</label>
  <input class="form-control" name="disponivel" id="disponivel" type="number">
</ul>


 

</div>
 



  <?php if(!isset($_GET['id'])){ echo'
  <button type="submit" name="submit" id="submit" class=" col-2 bot btn btn-primary" "=" style="margin: auto">Criar</button>';
	}?> 
  <?php if(isset($_GET['id'])){ echo'
  <button type="submit" name="edit" id="edit" value="nada" class=" col-2 bot btn btn-primary" "=" style="margin: auto">Editar</button>';
	}?> 


  </div>
</div>
</div>

  
 



<br>


  


</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstdisponivelp@5.3.1/dist/js/bootstdisponivelp.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>




</body></html>