<?php
    require_once 'Veiculo.php';

// POST DO FORMULARIO index.php
    $placa = $_POST['placa'];
    $tipo = $_POST['tipo'];
    $quantidadeHoras = $_POST['quantidadeHoras'];

    // VALIDAÇÃO DE DADOS
    if(!$placa || !$tipo || !$quantidadeHoras){
        exit('Dados incorretos!');
    }

    // OBJETO DA CLASSE PRODUTO
    $veiculo1 = new Estacionamento(
    $placa,
    (string) $tipo,
    (float) $quantidadeHoras
    );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículo cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class='cabecalho'>
        <h1>Veículo cadastrado</h1>
    </header>

    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Veículo</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Placa</td>
                    <td><?=$veiculo1?->getPlaca()?></td>
                </tr>
                <tr>
                    <td>Tipo</td>
                    <td><?=$veiculo1->getTipo()?></td>
                </tr>
                <tr>
                    <td>Quantidade de Horas</td>
                    <td><?=$veiculo1->getQuantidadeHoras()?></td>
                </tr>
                <tr>
                    <td>Valor total</td>
                    <td><?= number_format($veiculo1->calcularValor(), 2, ',','.')?></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php">Voltar para o cadastro</a>
    </main>
</body>
</html>