<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de reservas de hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class='cabecalho'>
        <h1>Sistema de reservas de hotel</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">

            <label for="nome">Nome do hóspede</label>
            <input type="text" required name="nome" id="nome">

            <label for="tipo">Tipo de quarto (Standard ou Suíte)</label>
            <select name="tipo" id="tipo" required>
                <option value="">Selecione...</option>
                <option value="Standard">Standard</option>
                <option value="Suíte">Suíte</option>
            </select>

            <label for="cafe">Deseja café da manhã?</label>
            <select name="cafe" id="cafe" required>
                <option value="">Selecione...</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>

            <label for="quantidadeDias">Quantidade de diárias</label>
            <input type="number" required name="quantidadeDias" id="quantidadeDias" min="1">

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
