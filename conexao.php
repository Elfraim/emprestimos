<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'equipamentoti';

$con = mysqli_connect($host, $user, $pass, $database ) or die ('Não foi possível conectar ao banco de dados');

if ($con){
 print ('Conectado com sucesso ao banco');
}

if ($con->connect_error) {
    echo "Falha ao conectar com o bando de dados.";
    print_r('<br>');
    echo "Erro: (" . $con->connect_errno . ")" . $con->connect_error ;
}
?>