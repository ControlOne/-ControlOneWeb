<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página de testes</title>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
          $.getJSON('estados_cidades.json', function (data) {
            var items = [];
            var options = '<option value="">escolha um estado</option>';
            $.each(data, function (key, val) {
              options += '<option value="' + val.nome + '">' + val.nome + '</option>';
            });
            $("#estados").html(options);

            $("#estados").change(function () {

              var options_cidades = '';
              var str = "";

              $("#estados option:selected").each(function () {
                str += $(this).text();
              });

              $.each(data, function (key, val) {
                if(val.nome == str) {
                  $.each(val.cidades, function (key_city, val_city) {
                    options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                  });
                }
              });
              $("#cidades").html(options_cidades);

            }).change();
          });
        });
    </script>
  </head>
  <body>
    <h1>Testes</h1>

    <form class="" action="index.html" method="post">
      <select id="estados">
  			<option value=""></option>
  		</select>
  		<select id="cidades">
  		</select>
    </form>

  </body>
</html>
