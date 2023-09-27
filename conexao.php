<?php
$host = 'localhost';
$user = 'root';
$pass = 'noteti3';
$database = 'equipamentosti';

$con = mysqli_connect($host, $user, $pass, $database ) or die ('Não foi possível conectar ao banco de dados');

if ($con){
 
}

if ($con->connect_error) {
    echo "Falha ao conectar com o bando de dados.";
    print_r('<br>');
    echo "Erro: (" . $con->connect_errno . ")" . $con->connect_error ;
}
?>