<form action="processa.php" method="post">

    <label for="nome">Nome do cliente</label>
    <input type="text" required name="nome" id="nome">

    <label for="tipo">Tipo de bicicleta (comum ou elétrica)</label>
    <input type="text" required name="tipo" id="tipo">

    <label for="quantidadeHoras">Quantidade de horas estacionadas</label>
    <input type="number" required name="quantidadeHoras" id="quantidadeHoras">

    <button type="submit">Enviar</button>

</form>