
<?php

class LocacaoBicicleta {
    private string $nomeCliente;
    private string $tipo;
    private int $quantidadeHoras;

    public function __construct(string $nomeCliente, string $tipo, int $quantidadeHoras) {
        $this->nomeCliente = $nomeCliente;

        // Padroniza o tipo da bicicleta
        $tipo = strtolower(trim($tipo));
        $tipo = str_replace('é', 'e', $tipo);

        $this->tipo = $tipo;
        $this->quantidadeHoras = $quantidadeHoras;
    }

    public function getNome() {
        return $this->nomeCliente;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getQuantidadeHoras() {
        return $this->quantidadeHoras;
    }

    // Calcula o valor bruto
    public function calcularValorBruto() {
        $valorPorHora = 0;

        if ($this->tipo === 'comum') {
            $valorPorHora = 10.00;
        } elseif ($this->tipo === 'eletrica') {
            $valorPorHora = 18.00;
        }

        return $valorPorHora * $this->quantidadeHoras;
    }

    // Calcula somente o valor do desconto
    public function calcularDesconto() {
        if ($this->quantidadeHoras >= 5) {
            return $this->calcularValorBruto() * 0.10;
        }

        return 0;
    }

    // Calcula o valor final
    public function calcularTotal() {
        return $this->calcularValorBruto() - $this->calcularDesconto();
    }
}

?>
