<?php
include_once('conexao.php');

if(isset($_POST['submit'])){



print_r($_POST['nome']);
print_r($_POST['ra']);
print_r($_POST['funcao']);


$nome =$_POST['nome'];
$RA = $_POST['ra'];
$funcao = $_POST['funcao'];


mysqli_query($con,"INSERT INTO usuario  VALUES ('$nome','$RA', '$funcao');") or die(mysqli_error($con));


header("Location: home_user.php");
}

?>
<html>


<head>
<title>
Cadastro - plataforma de empréstimos
</title>

<link rel="stylesheet" type="text/css" href="estilo.css"></link>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>


<h1 class="Tsistema">Sistema de Emprestimos</h1>

<body>
    <a  style="margin:10%;color:white" onclick="history.back()">
       
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>
 Voltar</a>
<br>
<br>

<form method="post" action="cadastro.php">
<h2 class="Tsistema">Cadastro</h2>
<?php 
if(isset($_POST['submit'])){
  echo'
<div class="alert-popup-container" style=backgrond-color:white;
position: fixed;">
  <div class="success-checkmark">
    <div class="check-icon">
      <span class="icon-line line-tip"></span>
      <span class="icon-line line-long"></span>
      <div class="icon-circle"></div>
      <div class="icon-fix"></div>
    </div>
  </div>
  <div class="alert-popup-title"> Salvo com Successo!!!</div>
  
  <div class="alert-popup-confirm">
    <button>OK</button>
  </div>


  </div>
</div>';} ?>
<div style="" class="row g-3 align-items-center">


  <div class="col-12">
    <label style="color:white" for="nome" class="col-form-label">Nome:</label>
</div>

<br>
  <div class="col-9">
    <input type="text" id="nome" name="nome" class="form-control" aria-describedby="passwordHelpInline">
  </div>


  <br>
  <div class="col-12">
    <label style="color:white" for="ra" class="col-form-label">Numero de RA:</label>
</div>

<div class="col-9">
    <input type="number" name="ra" id="ra" class="form-control" aria-describedby="passwordHelpInline">
  </div>


<br>
<div class="col-9">
    <label style="color:white" for="funcao" class="col-form-label">Função:</label>
</div>

<div class="col-9">
    <input type="text" name="funcao" id="funcao" class="form-control" aria-describedby="passwordHelpInline">
  </div>
 

  <button type="submit" name="submit" id="submit" class="bot col-4 btn btn-primary" 
">Cadastrar</button>




</form>
<?php 
if(isset($_POST['submit'])){
  echo'
<div class="alert-popup-container" style="margin-left: calc(-12rem + -13vw);
position: fixed;">
  <div class="success-checkmark">
    <div class="check-icon">
      <span class="icon-line line-tip"></span>
      <span class="icon-line line-long"></span>
      <div class="icon-circle"></div>
      <div class="icon-fix"></div>
    </div>
  </div>
  <div class="alert-popup-title"> Salvo com Successo!!!</div>
  
  <div class="alert-popup-confirm">
    <button>OK</button>
  </div>


  </div>
</div>';} ?>
<style>

.success-animation { margin:150px auto;}
        .alert-popup-container {
            text-align: center;
          }
          
          .alert-popup-title {
            font-size: 30px;
            font-weight: bold;
            color: #4CAF50;
            margin-top: 15px;
            margin-bottom: 15px;
            z-index: 2;
            position: relative;
          }
          
          .alert-popup-message {
            color: #777;
            font-size: 21px;
            font-weight: 300;
            line-height: 1.4;
          }
          
          .alert-popup-confirm {
            margin-top: 20px;
            margin-bottom: 20px;
          }
          
          .success-checkmark {
            width: 80px;
            height: 80px;
            margin: 0 auto;
          
            .check-icon {
              width: 80px;
              height: 80px;
              position: relative;
              border-radius: 50%;
              box-sizing: content-box;
              border: 4px solid #4CAF50;
          
              &::before {
                top: 3px;
                left: -2px;
                width: 30px;
                transform-origin: 100% 50%;
                border-radius: 100px 0 0 100px;
              }
          
              &::after {
                top: 0;
                left: 30px;
                width: 60px;
                transform-origin: 0 50%;
                border-radius: 0 100px 100px 0;
                animation: rotate-circle 4.25s ease-in;
              }
          
              &::before,
              &::after {
                content: '';
                height: 100px;
                position: absolute;
                background: #FFFFFF;
                transform: rotate(-45deg);
                z-index: 2;
              }
          
              .icon-line {
                height: 5px;
                background-color: #4CAF50;
                display: block;
                border-radius: 2px;
                position: absolute;
                z-index: 10;
          
                &.line-tip {
                  top: 46px;
                  left: 14px;
                  width: 25px;
                  transform: rotate(45deg);
                  animation: icon-line-tip 0.75s;
                }
          
                &.line-long {
                  top: 38px;
                  right: 8px;
                  width: 47px;
                  transform: rotate(-45deg);
                  animation: icon-line-long 0.75s;
                }
              }
          
              .icon-circle {
                top: -4px;
                left: -4px;
                z-index: 10;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                position: absolute;
                box-sizing: content-box;
                border: 4px solid rgba(76, 175, 80, .5);
              }
          
              .icon-fix {
                top: 8px;
                width: 5px;
                left: 26px;
                z-index: 1;
                height: 85px;
                position: absolute;
                transform: rotate(-45deg);
                background-color: #FFFFFF;
              }
            }
          }
          
          @keyframes rotate-circle {
            0% {
              transform: rotate(-45deg);
            }
          
            5% {
              transform: rotate(-45deg);
            }
          
            12% {
              transform: rotate(-405deg);
            }
          
            100% {
              transform: rotate(-405deg);
            }
          }
          
          @keyframes icon-line-tip {
            0% {
              width: 0;
              left: 1px;
              top: 19px;
            }
          
            54% {
              width: 0;
              left: 1px;
              top: 19px;
            }
          
            70% {
              width: 50px;
              left: -8px;
              top: 37px;
            }
          
            84% {
              width: 17px;
              left: 21px;
              top: 48px;
            }
          
            100% {
              width: 25px;
              left: 14px;
              top: 45px;
            }
          }
          
          @keyframes icon-line-long {
            0% {
              width: 0;
              right: 46px;
              top: 54px;
            }
          
            65% {
              width: 0;
              right: 46px;
              top: 54px;
            }
          
            84% {
              width: 55px;
              right: 0px;
              top: 35px;
            }
          
            100% {
              width: 47px;
              right: 8px;
              top: 38px;
            }
          }
          
</style>



<script>
$("button").click(function() {
  $(".check-icon").hide();
  setTimeout(function() {
    $(".check-icon").show();
  }, 10);
});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>


</html>