<?php
class Estacionamento{
    private string $placa;
    private string $tipo;
    private int $quantidadeHoras;

    public function __construct(string $placa, string $tipo, int $quantidadeHoras){
        $this->placa = $placa;
        $this->tipo = $tipo;
        $this->quantidadeHoras = $quantidadeHoras;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getQuantidadeHoras(){
        return $this->quantidadeHoras;
    }

        // Onde a condição deve ficar:
    public function calcularValor() {
        $valorPorHora = 0;

        // Condição para definir o preço por tipo de veículo
        if ($this->tipo === 'carro') {
            $valorPorHora = 10.00;
        } elseif ($this->tipo === 'moto') {
            $valorPorHora = 7.00;
        }

        // Retorna o valor total cobrado
        return $valorPorHora * $this->quantidadeHoras;
    }

}


?>