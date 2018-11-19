<?php
include '../../model/conexao/conexao.php';
$nome = $_POST['nome'];


// Criar código sql

$sql = "INSERT INTO categoria (nome) values (:nome)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':nome', $nome);


$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "linhas";


 ?>
 <a href="cadastrar_categoria.php"class="btn btn-success">Cadastrar Nova Categoria</a>
  <a href="consulta.php"class="btn btn-primary">HOME</a>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
