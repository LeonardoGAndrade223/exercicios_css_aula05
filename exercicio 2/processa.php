
<?php

require_once 'LocacaoBicicleta.php';

// Recebendo os dados do formulário
$nomeCliente = $_POST['nome'] ?? '';
$tipo = $_POST['tipo'] ?? '';
$quantidadeHoras = $_POST['quantidadeHoras'] ?? '';

// Validação dos dados
if (empty(trim($nomeCliente)) || empty(trim($tipo)) ||
    filter_var($quantidadeHoras, FILTER_VALIDATE_INT) === false ||
    (int)$quantidadeHoras <= 0) {
    exit('Dados incorretos!');
}

// Criando o objeto
$bicicleta1 = new LocacaoBicicleta(
    $nomeCliente,
    $tipo,
    (int)$quantidadeHoras
);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicicleta cadastrada</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="cabecalho">
        <h1>Bicicleta cadastrada</h1>
    </header>

    <main class="resultado">

        <table>
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>Nome do cliente</td>
                    <td><?= htmlspecialchars($bicicleta1->getNome()) ?></td>
                </tr>

                <tr>
                    <td>Tipo</td>
                    <td><?= htmlspecialchars($bicicleta1->getTipo()) ?></td>
                </tr>

                <tr>
                    <td>Quantidade de horas</td>
                    <td><?= $bicicleta1->getQuantidadeHoras() ?></td>
                </tr>

                <tr>
                    <td>Valor bruto</td>
                    <td>
                        R$ <?= number_format($bicicleta1->calcularValorBruto(), 2, ',', '.') ?>
                    </td>
                </tr>

                <tr>
                    <td>Desconto</td>
                    <td>
                        R$ <?= number_format($bicicleta1->calcularDesconto(), 2, ',', '.') ?>
                    </td>
                </tr>

                <tr>
                    <td>Valor total</td>
                    <td>
                        R$ <?= number_format($bicicleta1->calcularTotal(), 2, ',', '.') ?>
                    </td>
                </tr>

            </tbody>
        </table>

        <a href="index.php">Voltar para o cadastro</a>

    </main>

</body>
</html>
