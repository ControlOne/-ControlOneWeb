<?php
include '../../model/conexao/conexao.php';
$razao_Forne = $_POST['razao_Forne'];
$nomeFan_Forne = $_POST['nomeFan_Forne'];
$cnpj_Forne = $_POST['cnpj_Forne'];
$inscricaoEstadual_Forne = $_POST['inscricaoEstadual_Forne'];
$inscricaoMunicipal_Forne = $_POST['inscricaoMunicipal_Forne'];
$email_Forne = $_POST['email_Forne'];
$telefoneComercial_Forne = $_POST['telefoneComercial_Forne'];
$ruaAv_Forne = $_POST['ruaAv_Forne'];
$numero_Forne = $_POST['numero_Forne'];
$bairro_Forne = $_POST['bairro_Forne'];
$cep_Forne = $_POST['cep_Forne'];
$complemento_Forne = $_POST['complemento_Forne'];
$uf_Forne = $_POST['uf_Forne'];
$cidade_Forne = $_POST['cidade_Forne'];


// Criar código sql

$sql = "INSERT INTO fornecedor (razao_Forne, nomeFan_Forne, cnpj_Forne, inscricaoEstadual_Forne, inscricaoMunicipal_Forne, email_Forne, telefoneComercial_Forne, ruaAv_Forne, numero_Forne, bairro_Forne, cep_Forne, complemento_Forne, uf_Forne, cidade_Forne) values (:razao_Forne, :nomeFan_Forne, :cnpj_Forne, :inscricaoEstadual_Forne, :inscricaoMunicipal_Forne, :email_Forne, :telefoneComercial_Forne, :ruaAv_Forne, :numero_Forne, :bairro_Forne, :cep_Forne, :complemento_Forne, :uf_Forne, :cidade_Forne)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':razao_Forne', $razao_Forne);
$inserir-> bindParam (':nomeFan_Forne', $nomeFan_Forne);
$inserir-> bindParam (':cnpj_Forne', $cnpj_Forne);
$inserir-> bindParam (':inscricaoEstadual_Forne', $inscricaoEstadual_Forne);
$inserir-> bindParam (':inscricaoMunicipal_Forne', $inscricaoMunicipal_Forne);
$inserir-> bindParam (':email_Forne', $email_Forne);
$inserir-> bindParam (':telefoneComercial_Forne', $telefoneComercial_Forne);
$inserir-> bindParam (':ruaAv_Forne', $ruaAv_Forne);
$inserir-> bindParam (':numero_Forne', $numero_Forne);
$inserir-> bindParam (':bairro_Forne', $bairro_Forne);
$inserir-> bindParam (':cep_Forne', $cep_Forne);
$inserir-> bindParam (':complemento_Forne', $complemento_Forne);
$inserir-> bindParam (':uf_Forne', $uf_Forne);
$inserir-> bindParam (':cidade_Forne', $cidade_Forne);

$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "linhas";
header('location:../../view/cadastro/cadastrar_fornecedor.php');

 ?>
