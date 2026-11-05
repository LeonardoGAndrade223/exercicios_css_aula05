<?php

require_once 'ReservaHotel.php';

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$cafe = $_POST['cafe'];
$quantidadeDias = $_POST['quantidadeDias'];

if (empty($nome) || empty($tipo) || empty($cafe) || $quantidadeDias <= 0){
    die("Preencha todos os campos corretamente!");
}

$reserva = new ReservaHotel($nome, $tipo, $cafe, $quantidadeDias);

echo "<h1>Resultado da reserva</h1>";

echo "Nome do hóspede: " . $reserva->getNome() . "<br>";
echo "Tipo de quarto: " . $reserva->getTipo() . "<br>";
echo "Quantidade de diárias: " . $reserva->getQuantidadeDias() . "<br>";

echo "Hospedagem: R$ " . number_format($reserva->calcularHospedagem(), 2, ',', '.') . "<br>";

echo "Café da manhã: R$ " . number_format($reserva->calcularCafe(), 2, ',', '.') . "<br>";

echo "Desconto: R$ " . number_format($reserva->calcularDesconto(), 2, ',', '.') . "<br>";

echo "Total: R$ " . number_format($reserva->calcularTotal(), 2, ',', '.');

?>
