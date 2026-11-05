<?php

class EmprestimoLivro{

    private string $nome;
    private string $livro;
    private int $diasAtraso;

    public function __construct($nome, $livro, $diasAtraso){
        $this->nome = $nome;
        $this->livro = $livro;
        $this->diasAtraso = $diasAtraso;
    }

    public function calcularMulta(){
        if ($this->diasAtraso <= 5){
            return $this->diasAtraso * 2;
        } else {
            return (5 * 2) + (($this->diasAtraso - 5) * 3);
        }
    }

    public function verificarSituacao(){
        if ($this->diasAtraso > 0){
            return "Atrasado";
        } else {
            return "Em dia";
        }
    }

    public function getNome(){
        return $this->nome;
    }

    public function getLivro(){
        return $this->livro;
    }

    public function getDiasAtraso(){
        return $this->diasAtraso;
    }
}