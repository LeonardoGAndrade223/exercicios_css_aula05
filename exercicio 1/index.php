<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de estacionamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class='cabecalho'>
        <h1>Sistema de estacionamento</h1>
    </header>

    <div class="formulario">
        <!-- CHAMA O processa.php -->
        <form action="processa.php" method="post"> 
        <!-- CAMPOS PARA PREENCHER O OBJETO VEÍCULO -->
         <label for="placa">Placa do veículo</label>
         <input type="text" required name="placa" id="placa">

         <!-- CAMPO PREÇO -->
          <label for="tipo">Tipo de veículo (carro ou moto)</label>
          <input type="text" required name="tipo" id="tipo">

          <!-- CAMPO QUANTIDADE -->
           <label for="quantidadeHoras">Quantidade de horas estacionadas</label>
           <input type="number" required name="quantidadeHoras" id="quantidadeHoras">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>