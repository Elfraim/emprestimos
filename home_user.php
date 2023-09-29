<?php
session_start();

include_once('conexao.php');
$ra = $_SESSION['ra'];

if(!isset($_SESSION['ra']) == true ) 
{
  unset($_SESSION['ra']);
;
header('Location: login.php');
}
	  


$sql = "SELECT em.nome_completo, em.funcao, es.equipamento, em.data_emprestimo,em.id , es.id as est_id, em.quantidade  FROM emprestimo as em inner join estoque as es  where em.equipamento = es.id ORDER BY data_emprestimo DESC";

$result = mysqli_query($con, $sql);



?>

<html><head>
<title>
Página Inicial - plataforma de empréstimos de equipamentos
</title>

<link rel="stylesheet" type="text/css" href="estilo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">




</head>


<body style="background-color:white"><h1 class="Tsistema">Sistema de Emprestimos</h1>

<?php
   if(isset($_GET['equipamento'])){
    $eid = $_GET['eid'];

  $sql =" SELECT SUM(quantidade) FROM emprestimo where equipamento= '$eid' ";
 



$r = mysqli_query($con,$sql);

 while($u = mysqli_fetch_assoc($r))
{

   $emprestados= $u['SUM(quantidade)'];
  
echo " <script> console.log(".$emprestados.");</script>";
}
   }
?>
    <a style="margin:10%;color:white" href="login.php">
       
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1h-1z"/>
  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
</svg>

 Sair</a>
<br>
<br>

<form method="post" action="cadastro.php">
<ul class="nav justify-content-center">
  <li class="nav-item" style="zoom: 104%;background-color: #f3f3f3;border-top-left-radius: 10%;box-shadow: 0 0 2px #000000;">
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
  <li class="nav-item" style="
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

 <div class="row" style="
    margin-top: 3rem;
    margin-bottom: 2rem;
">
    <input placeholder="Buscar" lacetype="text" id="funcao" class="col-7" aria-describedby="passwordHelpInline"> <button type="submit" name="submit" id="submit" class=" col-2 bot btn btn-primary" "="" style="margin: 0;">Pesquisar</button>
</div>
<div class="row" style="margin-left: -5vw; padding: 10%; background-color: white;width: 100%">


<h3 for="ra" class="col-form-label">Equipamentos:</h3>
<br>
<br> 

 <?php
   $sql =" SELECT * FROM estoque ";
 
$res = mysqli_query($con, $sql);

 while($user= mysqli_fetch_assoc($res))
{

 
   $eq = $user['equipamento'];
    $qtd =$user['quantidade'];
    
	 $disp= $user['disponivel'];
	 $id= $user['id'];
	 echo '<div class="btn-group"><a class="col-1"></a><a class="col-10 btn btn-outline-primary" href="home_user.php?equipamento='.$eq.'&eid='.$id.'">'.$eq.
     ' </a> <a class=" col-1 btn btn-outline-light" href="estoque.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="royalblue" class="bi bi-pencil" viewBox="0 0 16 16">
     <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
   </svg></a></div> ';
}
	?> 



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
<div class="row">
  
  <canvas id="myChart" width="600" height="400"></canvas>
  </div>
	 
 
 <?php
 
 if(isset($_GET['equipamento'])){
	 $equip = $_GET['equipamento'];
	 
   $sql =" SELECT * FROM estoque where equipamento = '$equip' ";
 
$resultado = mysqli_query($con, $sql);

 while($user_data2 = mysqli_fetch_assoc($resultado))
{

 
   $eq = $user_data2['equipamento'];
    $qtd =$user_data2['quantidade'];
    
	 $disp= $user_data2['disponivel'];
     $id= $user_data2['id'];

 

echo'

<script>
  const ctx = document.getElementById("myChart");

  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Quantidade", "Emprestados","Quantidade Disponivel"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ],
      datasets: [{
        label: "Equipamento             '.$eq.'        ",
        data: ["'.$qtd.'","'.$emprestados.'","'.$qtd-$emprestados.'" , 5, 2, 3],
		 backgroundColor: [
     
      "rgba(75, 192, 192, 0.2)",
      "rgba(205, 0, 0,  0.2)"

    ],
    borderColor: [
      
      "rgb(75, 192, 192)",
      "rgb(255,0, 0)"

    ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

} ';
}
}
?>


<div class="col-12">
<br><br>
    <h5 for="ra" class="col-form-label">Usuários:</h5>

	<a style="float: right" href="cadastro.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></a>
	<div class="container bootdey">
<div class="row">
<div style="display:flex " class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
<?php
   $sql =" SELECT * FROM usuario  ";
 
$sql = mysqli_query($con, $sql)  or die(mysqli_error($con));

 while($usuario= mysqli_fetch_assoc($sql))
{

 
   $nome = $usuario['nome'];
    $funcao =$usuario['funcao'];
    $id =$usuario['id'];
	 
	 echo '

    <div class="col-6" style="text-align: center">
        <div class="user-widget-2">
            <ul class="list-unstyled">
                <li class="media">
				
				<button type="button" class="btn btn-light position-relative">
  
 
				
                    <div class="rounded-circle d-flex align-self-center" style="
                    margin: auto;
                " alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="gray" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
          </div>         

  </span>
  <a href="delete.php?uid='.$id.'">
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
  <span class="visually-hidden">unread messages</span></span></a>
</button>

				   <div style="    margin: 5%"class="media-body">
                        <h5>'.$nome.' </h5>
                        <p> '.$funcao.'</p>
                       </div><i class="d-flex align-self-center fa fa-dot-circle-o color-success"></i>
					
				</li>
	      </ul>
		 </div>
	  </div>';
	  
}
	  ?>
	  </div>
    </div>	
</div>	
</div>












	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />


<div class="container mt-3 mb-4">
<div class="col-12 mt-4 mt-lg-0" style="
    margin-left: -5vw;
    width: 118%;
">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
          <div class="col-12">
<br><br>
    <h5 for="ra" class="col-form-label">Empréstimos:</h5>
	<a style="float: right" href="criar.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></a>
	<div class="container bootdey">
<div class="row">
<div style="display:flex " class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
            <thead>
              <tr>
                <th>Dados do Emprestimo: </th>
                <th class="text-center">Data empréstimo:</th>
                <th class="action text-right"></th>
              </tr>
            </thead>
            <tbody>
			<?php 
			while($user_data = mysqli_fetch_assoc($result))
{
			echo'
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                     </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">'.$user_data['nome_completo'].'</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i>'. $user_data['funcao'].'</li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i><small class="text-body-secondary">Equipamento:
    
'; echo $user_data['equipamento'].'                    &nbsp   Quantidade:
    '; echo $user_data['quantidade'].'</li>
	
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
				<td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"></a>
                  <span class="candidate-list-time order-1">'.$user_data['data_emprestimo'].'</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="criar.php?id='.$user_data['id'].'&q='. $user_data['quantidade'].'&disponivel='.$disp.'" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="updateEstoque.php?id='.$user_data['id'].'&equipamento='.$user_data['est_id'].'&quantidade='.$user_data['quantidade'].'&disponivel='.$disp.'" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
				
	        </tr>';
			

}

?>
		</tbody>
	   </table>
	            </div>
             </div>
           </div>
		</div>
    </div>
	
	
	
  <div class="row justify-content-start" style="
    margin: 0;
    margin-left: -5vw;
">
  

</div>
</div>

  
 



<br>
<div class="col-9">
    <label style="color:white" for="funcao" class="col-form-label">Pendências:</label> 
</div>

<div class="col-9">
    <div class="col-12>
	
  </div>
</div>
  


</div>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<style>

body {
    margin-top: 20px;
}

.user-widget-2 .media {
    margin-bottom: 20px;
}

.user-widget-2 h5 {
    font-size: 0.9375rem;
    font-weight: 400;
    margin-bottom: 10px;
}

.user-widget-2 p {
    font-size: 0.8125rem;
    margin-bottom: 10px;
}

.user-widget-2 p .badge {
    margin-right: 10px;
}

.user-widget-2 i {
    margin-left: 20px;
    margin-right: 20px;
}

.user-widget-2 .rounded-circle {
    border: 3px solid #fff;
    height: 50px;
    width: 50px;
    -webkit-box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
    margin-right: 20px;
}

.sample-badges .badge {
    margin-right: 10px;
}

.badge {
    border-radius: 8px;
    border: 0;
    font-size: 0.75rem;
    text-align: center;
    line-height: 0.8;
    padding: 8px 12px;
    font-weight: normal;
}

.badge.badge-sm {
    font-size: 0.625rem;
    line-height: 0.6;
}

.badge.badge-lg {
    font-size: 0.875rem;
    line-height: 1;
}

.badge.badge-rounded {
    padding: 0;
    height: 24px;
    width: 24px;
    line-height: 24px;
    border-radius: 50%;
    display: inline-block;
    vertical-align: middle;
}

.badge.badge-rounded.badge-sm {
    height: 18px;
    width: 18px;
    line-height: 18px;
    border-radius: 50%;
}

.badge.badge-rounded.badge-sm.badge-outline {
    line-height: 16px;
}

.badge.badge-rounded.badge-lg {
    height: 30px;
    width: 30px;
    line-height: 30px;
    border-radius: 50%;
}

.badge.badge-rounded.badge-lg.badge-outline {
    line-height: 28px;
}

.badge.badge-light:not(.badge-outline) {
    background-color: #ffffff;
    color: #fff;
}

.badge.badge-outline.badge-light {
    border: 1px solid #ffffff;
    background-color: transparent;
    color: #ffffff;
}

.badge.badge-dark:not(.badge-outline) {
    background-color: #212121;
    color: #fff;
}

.badge.badge-outline.badge-dark {
    border: 1px solid #212121;
    background-color: transparent;
    color: #212121;
}

.badge.badge-default:not(.badge-outline) {
    background-color: #212121;
    color: #fff;
}

.badge.badge-outline.badge-default {
    border: 1px solid #212121;
    background-color: transparent;
    color: #212121;
}

.badge.badge-primary:not(.badge-outline) {
    background-color: #303f9f;
    color: #fff;
}

.badge.badge-outline.badge-primary {
    border: 1px solid #303f9f;
    background-color: transparent;
    color: #303f9f;
}

.badge.badge-secondary:not(.badge-outline) {
    background-color: #7b1fa2;
    color: #fff;
}

.badge.badge-outline.badge-secondary {
    border: 1px solid #7b1fa2;
    background-color: transparent;
    color: #7b1fa2;
}

.badge.badge-info:not(.badge-outline) {
    background-color: #0288d1;
    color: #fff;
}

.badge.badge-outline.badge-info {
    border: 1px solid #0288d1;
    background-color: transparent;
    color: #0288d1;
}

.badge.badge-success:not(.badge-outline) {
    background-color: #388e3c;
    color: #fff;
}

.badge.badge-outline.badge-success {
    border: 1px solid #388e3c;
    background-color: transparent;
    color: #388e3c;
}

.badge.badge-warning:not(.badge-outline) {
    background-color: #ffa000;
    color: #fff;
}

.badge.badge-outline.badge-warning {
    border: 1px solid #ffa000;
    background-color: transparent;
    color: #ffa000;
}

.badge.badge-danger:not(.badge-outline) {
    background-color: #d32f2f;
    color: #fff;
}

.badge.badge-outline.badge-danger {
    border: 1px solid #d32f2f;
    background-color: transparent;
    color: #d32f2f;
}


.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}    
/* user-dashboard-info-box */
.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
.user-dashboard-info-box .candidates-list .thumb img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    border-radius: 50%;
}

.user-dashboard-info-box .title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 30px 0;
}

.user-dashboard-info-box .candidates-list td {
    vertical-align: middle;
}

.user-dashboard-info-box td li {
    margin: 0 4px;
}

.user-dashboard-info-box .table thead th {
    border-bottom: none;
}

.table.manage-candidates-top th {
    border: 0;
}

.user-dashboard-info-box .candidate-list-favourite-time .candidate-list-favourite {
    margin-bottom: 10px;
}

.table.manage-candidates-top {
    min-width: 500px;
}

.user-dashboard-info-box .candidate-list-details ul {
    color: #969696;
}

/* Candidate List */
.candidate-list {
    background: #ffffff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #eeeeee;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.candidate-list:hover {
    -webkit-box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    position: relative;
    z-index: 99;
}
.candidate-list:hover a.candidate-list-favourite {
    color: #e74c3c;
    -webkit-box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
    box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
}

.candidate-list .candidate-list-image {
    margin-right: 25px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 80px;
    flex: 0 0 80px;
    border: none;
}
.candidate-list .candidate-list-image img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
}

.candidate-list-title {
    margin-bottom: 5px;
}

.candidate-list-details ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 0px;
}
.candidate-list-details ul li {
    margin: 5px 10px 5px 0px;
    font-size: 13px;
}

.candidate-list .candidate-list-favourite-time {
    margin-left: auto;
    text-align: center;
    font-size: 13px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 90px;
    flex: 0 0 90px;
}
.candidate-list .candidate-list-favourite-time span {
    display: block;
    margin: 0 auto;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite {
    display: inline-block;
    position: relative;
    height: 40px;
    width: 40px;
    line-height: 40px;
    border: 1px solid #eeeeee;
    border-radius: 100%;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    margin-bottom: 20px;
    font-size: 16px;
    color: #646f79;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite:hover {
    background: #ffffff;
    color: #e74c3c;
}

.candidate-banner .candidate-list:hover {
    position: inherit;
    -webkit-box-shadow: inherit;
    box-shadow: inherit;
    z-index: inherit;
}

.bg-white {
    background-color: #ffffff !important;
}
.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}

</style>


</body></html>