
<html>


<head>
<title>
Login - plataforma de empréstimos
</title>

<link rel="stylesheet" type="text/css" href="estilo.css"></link>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>


<h1 class="Tsistema">Sistema de Emprestimos</h1>

<body>
 
<br>
<br>

<form method="post" action="textLogin.php">
<h2 style="margin-bottom: calc(2rem + 2vw);" class="Tsistema">Fazer login</h2>

<div style="" class="row g-3 align-items-center">



  <br>
  <div class="col-12">
    <label style="color:white" for="ra" class="col-form-label">Numero de RA:</label>
</div>

<div class="col-9">
    <input type="number" name="ra" id="ra" class="form-control" aria-describedby="passwordHelpInline">
  </div>




  <button type="submit" style="
    margin-top: calc(6rem + 6vw);
"  id="submit" class="bot col-4 btn btn-primary" 
>Entrar</button>

  <a  class="bot col-4 btn btn-outline-light" 
 href="cadastro.php">Cadastrar</a>

</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>


</html>