<?php

class ReservaHotel{

    private string $nome;
    private string $tipo;
    private string $cafe;
    private int $quantidadeDias;

    public function __construct($nome, $tipo, $cafe, $quantidadeDias){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->cafe = $cafe;
        $this->quantidadeDias = $quantidadeDias;
    }

    public function calcularHospedagem(){
        if ($this->tipo === 'Standard'){
            return $this->quantidadeDias * 150;
        } else {
            return $this->quantidadeDias * 230;
        }
    }

    public function calcularCafe(){
        if ($this->cafe === 'Sim'){
            return $this->quantidadeDias * 25;
        } else {
            return 0;
        }
    }

    public function calcularDesconto(){
        if ($this->quantidadeDias >= 5){
            return $this->calcularHospedagem() * 0.08;
        } else {
            return 0;
        }
    }

    public function calcularTotal(){
        return $this->calcularHospedagem() + $this->calcularCafe() - $this->calcularDesconto();
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getCafe(){
        return $this->cafe;
    }

    public function getQuantidadeDias(){
        return $this->quantidadeDias;
    }
}
