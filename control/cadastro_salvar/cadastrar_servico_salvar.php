<?php
include '../../model/conexao/conexao.php';
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];



// Criar código sql

$sql = "INSERT INTO servico (nome_Serv, descricao_Serv, valor_Serv) values (:nome, :descricao, :valor)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':nome', $nome);
$inserir-> bindParam (':descricao', $descricao);
$inserir-> bindParam (':valor', $valor);


$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "linhas";


 ?>
 <a href="cadastrar_servico_salvar.php"class="btn btn-success">Cadastrar Novo Serviço</a>
  <a href="consulta.php"class="btn btn-primary">HOME</a>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
