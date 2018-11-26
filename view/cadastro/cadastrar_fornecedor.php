<?php
$titulo = "Cadastro fornecedor";

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Meta tags Obrigatórias -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?= $titulo ?>
  </title>
</head>

<body>
  <p>Informações Jurídicas</p>
  <form method="post" action="cadastrar_fornecedor_salvar.php">
    <div class="form-group">
      <label for="razao_Forne">Razão Social</label>
      <input type="text" class="form-control" name="razao_Forne" placeholder="Digite a Razão Social do fornecedor...">
    </div>

    <div class="form-group">
      <label for="nomeFan_Forne">Nome fantasia</label>
      <input type="text" class="form-control" name="nomeFan_Forne" placeholder="Digite o nome fantasia do fornecedor...">
    </div>
    <div class="form-group">
      <label for="cnpj_Forne">CNPJ</label>
      <input type="text" class="form-control" name="cnpj_Forne" placeholder="Digite o CNPJ do fornecedor...">
    </div>

    <div class="form-group">
      <label for="inscricaoEstadual_Forne">Inscrição Estadual</label>
      <input type="text" class="form-control" name="inscricaoEstadual_Forne" placeholder="Digite a Inscrição Estadual do fornecedor...">
    </div>


    <div class="form-group">
      <label for="inscricaoMunicipal_Forne">Inscrição Municipal</label>
      <input type="text" class="form-control" name="inscricaoMunicipal_Forne" placeholder="Digite a Inscrição Municipal do fornecedor...">
    </div>

    <br>
    <p>Contato</p>
    <br>

    <div class="form-group">
      <label for="email_Forne">E-mail</label>
      <input type="email" class="form-control" name="email_Forne" placeholder="Digite o e-mail do fornecedor...">
    </div>

    <div class="form-group">
      <label for="telefoneComercial_Forne">Telefone comercial</label>
      <input type="number" class="form-control" name="telefoneComercial_Forne" placeholder="Digite o telefone">
    </div>

        <br>
        <p>Endereço</p>
        <br>

        <div class="form-group">
          <label for="ruaAv_Forne">Rua/Avenida</label>
          <input type="text" class="form-control" name="ruaAv_Forne" placeholder="Digite o lagradouro do fornecedor...">

          <label for="numero_Forne">Número</label>
          <input type="number" class="form-control" name="numero_Forne" placeholder="Digite o número do endereço do fornecedor...">
        </div>


        <div class="form-group">
          <label for="bairro_Forne">Bairro</label>
          <input type="text" class="form-control" name="bairro_Forne" placeholder="Digite o bairro do fornecedor...">

          <label for="cep_Forne">CEP</label>
          <input type="text" class="form-control" name="cep_Forne" placeholder="Digite o código postal do fornecedor...">
        </div>


        <div class="form-group">
          <label for="complemento_Forne">Complemento</label>
          <input type="text" class="form-control" name="complemento_Forne" placeholder="Digite o complemento do endereço do fornecedor...">

          <label for="uf_Forne">Unidade Federativa</label>
          <select class="form-control" name="uf_Forne">
            <option>Selecione a UF</option>
            <option>Rondônia</option>
            <option>Mato Grosso</option>
            <option>Acre</option>
            <option>Amazonas</option>
          </select>
<?php

$valor = $_POST['uf_Forne']; ?>


          <label for="cidade_Forne">Cidade</label>
          <select class="form-control" name="cidade_Forne">
            <option>Selecione a cidade</option>
            <option>Cidade 1</option>
            <option>Cidade 2</option>
            <option>Cidade 3</option>
            <option>Cidade 4</option>
          </select>
        </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="menu.php" class="btn btn-danger">Cancelar</a>



  </form>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
