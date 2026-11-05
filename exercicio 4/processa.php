<?php

require_once 'EmprestimoLivro.php';

$nome = $_POST['nome'];
$livro = $_POST['livro'];
$diasAtraso = $_POST['diasAtraso'];

if (empty($nome) || empty($livro) || $diasAtraso < 0){
    die("Preencha todos os campos corretamente!");
}

$emprestimo = new EmprestimoLivro($nome, $livro, $diasAtraso);

echo "<h1>Resultado do empréstimo</h1>";

echo "Nome do usuário: " . $emprestimo->getNome() . "<br>";

echo "Título do livro: " . $emprestimo->getLivro() . "<br>";

echo "Dias de atraso: " . $emprestimo->getDiasAtraso() . "<br>";

echo "Situação: " . $emprestimo->verificarSituacao() . "<br>";

echo "Multa: R$ " . number_format($emprestimo->calcularMulta(), 2, ',', '.');

?>