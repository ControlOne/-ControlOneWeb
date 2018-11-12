<?php
include '../../model/conexao/conexao.php';
$tratamento = $_POST['tratamento'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$emissor = $_POST['emissor'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$ruaav = $_POST['ruaav'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];

// Criar código sql

$sql = "INSERT INTO cliente (tratamento_cli, nome_cli,sobrenome_cli, cpf_cli, rg_cli, emissorRg_cli,  email_cli, tel_cli, ruaAv_cli, numero_cli, complemento_cli, bairro_cli, cep_cli, unidadeFed_cli, cidade_cli) values (:tratamento, :nome, :sobrenome,:cpf,  :rg, :emissor, :email, :telefone, :ruaav, :numero, :complemento, :bairro, :cep, :uf, :cidade)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':tratamento', $tratamento);
$inserir-> bindParam (':nome', $nome);
$inserir-> bindParam (':sobrenome', $sobrenome);
$inserir-> bindParam (':cpf', $cpf);
$inserir-> bindParam (':rg', $rg);
$inserir-> bindParam (':emissor', $emissor);
$inserir-> bindParam (':email', $email);
$inserir-> bindParam (':telefone', $telefone);
$inserir-> bindParam (':ruaav', $ruaav);
$inserir-> bindParam (':numero', $numero);
$inserir-> bindParam (':complemento', $complemento);
$inserir-> bindParam (':bairro', $bairro);
$inserir-> bindParam (':cep', $cep);
$inserir-> bindParam (':uf', $uf);
$inserir-> bindParam (':cidade', $cidade);


$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "linhas";


 ?>
 <a href="cadastrar.php"class="btn btn-success">Cadastrar Nova Pessoa</a>
  <a href="consulta.php"class="btn btn-primary">HOME</a>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
