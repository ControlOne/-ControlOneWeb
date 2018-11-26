<?php
include '../conexao/conexao.php';
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

// Criar código sql

$sql = "INSERT INTO pessoa (nome_pes,sobrenome_pes, email_pes, idade_pes) values (:nome, :sobrenome, :email, :idade)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':nome', $nome);
$inserir-> bindParam (':sobrenome', $sobrenome);
$inserir-> bindParam (':email', $email);
$inserir-> bindParam (':idade', $idade);

$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "linhas";


 ?>
 <a href="../../view/cadastro/cadastrar_funcionario.php"class="btn btn-success">Cadastrar Nova Funcionário</a>
<a href="../../view/cadastro/menu.php"class="btn btn-success">Menu</a>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
