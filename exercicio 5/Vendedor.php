<?php

class Vendedor{

    private string $nome;
    private float $salarioBase;
    private float $vendas;

    public function __construct($nome, $salarioBase, $vendas){
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->vendas = $vendas;
    }

    public function calcularComissao(){
        if ($this->vendas <= 5000){
            return $this->vendas * 0.04;
        } else {
            return $this->vendas * 0.06;
        }
    }

    public function calcularBonus(){
        if ($this->vendas > 10000){
            return 100;
        } else {
            return 0;
        }
    }

    public function calcularSalarioFinal(){
        return $this->salarioBase + $this->calcularComissao() + $this->calcularBonus();
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }

    public function getVendas(){
        return $this->vendas;
    }
}