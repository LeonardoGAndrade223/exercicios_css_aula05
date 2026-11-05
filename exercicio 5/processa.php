<?php

require_once 'Vendedor.php';

$nome = $_POST['nome'];
$salarioBase = $_POST['salarioBase'];
$vendas = $_POST['vendas'];

if (empty($nome) || $salarioBase < 0 || $vendas < 0){
    die("Preencha todos os campos corretamente!");
}

$vendedor = new Vendedor($nome, $salarioBase, $vendas);

echo "<h1>Resultado do pagamento</h1>";

echo "Nome do vendedor: " . $vendedor->getNome() . "<br>";

echo "Salário-base: R$ " . number_format($vendedor->getSalarioBase(), 2, ',', '.') . "<br>";

echo "Total de vendas: R$ " . number_format($vendedor->getVendas(), 2, ',', '.') . "<br>";

echo "Comissão: R$ " . number_format($vendedor->calcularComissao(), 2, ',', '.') . "<br>";

echo "Bônus: R$ " . number_format($vendedor->calcularBonus(), 2, ',', '.') . "<br>";

echo "Salário final: R$ " . number_format($vendedor->calcularSalarioFinal(), 2, ',', '.');

?>