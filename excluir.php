<?php


include 'conexao.php';

$codigo = $_POST['codigo'];


$recebendo = "DELETE FROM contatos WHERE codigo = '$codigo' ";
$query_cadastros = mysqli_query ($connx,$recebendo);

header('location:listagem.php');


?>