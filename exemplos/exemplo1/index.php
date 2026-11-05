<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class='cabecalho'>
        <h1>Cadastro de produtos</h1>
    </header>

    <div class="formulario">
        <!-- CHAMA O processa.php -->
        <form action="processa.php" method="post"> 
        <!-- CAMPOS PARA PREENCHER O OBJETO PRODUTO -->
         <label for="nome">Nome</label>
         <input type="text" required name="nome" id="nome">

         <!-- CAMPO PREÇO -->
          <label for="preco">Preço</label>
          <input type="number" required name="preco" id="preco">

          <!-- CAMPO QUANTIDADE -->
           <label for="quantidade">Quantidade</label>
           <input type="number" required name="quantidade" id="quantidade">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>