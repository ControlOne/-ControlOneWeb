<?php
  $titulo = "Cadastrar Despesa";
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
   <p>Informações Básicas</p>
     <form method="post" action="../../control/cadastro_salvar/cadastrar_servico_salvar.php">
       <div class="form-group">

           <div class="form-group">
             <label for="nome">CNPJ/CPF</label>
             <input type="text" class="form-control" name="cnpjCpf" placeholder="Digite o nome">
           </div>

            <div class="form-group">
              <label for="nome">Descrição</label>
              <textarea rows="5" cols="40" name="descricao" class="form-control" type="text"></textarea>
            </div>

            <div class="form-group">
              <label for="nome">Endereço</label>
              <input type="text" class="form-control" name="endereco" placeholder="Digite o nome">
            </div>

            <div class="form-group">
              <label for="nome">Valor</label>
              <input type="number" class="form-control" name="valor" placeholder="Digite o valor">
            </div>
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
