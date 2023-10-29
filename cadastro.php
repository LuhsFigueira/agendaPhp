<?php


include 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$recebendo = "INSERT INTO contatos (codigo, nome, telefone, email) VALUES ('', '$nome', '$telefone', '$email')";

$query_cadastros = mysqli_query ($connx,$recebendo);

header('location:listagem.php');



?>