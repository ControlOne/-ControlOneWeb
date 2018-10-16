<?php
$titulo = "Cadastro Funcionário";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?= $titulo ?>
  </title>
</head>

<body>
  <p>Informações Básicas</p>
  <form method="post" action="cadastrar_cliente_salvar.php">
    <div class="form-group">
      <label for="tratamento">Tratamento</label>
      <select class="form-control" name="tratamento">
        <option>Selecione o tratamento</option>
        <option>Sr</option>
        <option>Sra</option>
        <option>Dr</option>
        <option>Dra</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
    </div>

    <div class="form-group">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" class="form-control" name="sobrenome" placeholder="Digite o sobrenome">
    </div>

    <br>
    <p>Informações Pessoais</p>
    <br>

    <div class="form-group">
      <label for="cpf">CPF</label>
      <input type="number" class="form-control" name="cpf" placeholder="Digite o CPF">
    </div>

    <div class="form-group">
      <label for="rg">RG</label>
      <input type="number" class="form-control" name="rg" placeholder="Digite o RG">

      <label for="emissor">Emissor</label>
      <select class="form-control" name="emissor">
        <option>Selecione o orgão emissor</option>
        <option>SSP - Secretaria de Segurança Pública</option>
        <option>SESDEC - Secretaria de Segurança, Defesa e Cidadania</option>
        <option>COREN - Conselho Regional de Enfermagem</option>
        <option>CRA - Conselho Regional de Administração</option>
        <option>CRAS - Conselho Regional de Assistentes Sociais</option>
        <option>CRB - Conselho Regional de Biblioteconomia</option>
        <option>CRC - Conselho Regional de Contabilidade</option>
        <option>CRE - Conselho Regional de Estatística</option>
        <option>CREA - Conselho Regional de Engenharia Arquitetura e Agronomia</option>
        <option>CRECI - Conselho Regional de Corretores de Imóveis</option>
        <option>CREFIT - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
        <option>CRF - Conselho Regional de Farmácia</option>
        <option>CRM - Conselho Regional de Medicina</option>
        <option>CRN - Conselho Regional de Nutrição</option>
        <option>CRO - Conselho Regional de Odontologia</option>
        <option>CRP - Conselho Regional de Psicologia</option>
        <option>CRPRE - Conselho Regional de Profissionais de Relações Públicas</option>
        <option>CRQ - Conselho Regional de Química</option>
        <option>CRRC - Conselho Regional de Representantes Comerciais</option>
        <option>CRMV - Conselho Regional de Medicina Veterinária</option>
        <option>DPF - Polícia Federal</option>
        <option>EST - Documentos Estrangeiros</option>
        <option>I CLA - Carteira de Identidade Classista</option>
        <option>MAE - Ministério da Aeronáutica</option>
        <option>MEX - Ministério do Exército</option>
        <option>MMA - Ministério da Marinha</option>
        <option>OAB - Ordem dos Advogados do Brasil</option>
        <option>OMB - Ordens dos Músicos do Brasil</option>
        <option>IFP - Instituto de Identificação Félix Pacheco</option>
        <option>OUT - Outros Emissores</option>

      </select>

    </div>


    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Digite o email">
    </div>


    <div class="form-group">
      <label for="telefone">Telefone</label>
      <input type="number" class="form-control" name="telefone" placeholder="Digite o telefone">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="consulta.php" class="btn btn-danger">Cancelar</a>



  </form>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
