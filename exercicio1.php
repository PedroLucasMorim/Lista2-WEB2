<?php

class Funcionario {
    public $nome;
    public $sobrenome;
    public $horasTrabalhadas;
    public $valorPorHora;

    public function __construct($nome, $sobrenome, $horasTrabalhadas, $valorPorHora) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->valorPorHora = $valorPorHora;
    }

    
    public function nomeCompleto() {
        return $this->nome . " " . $this->sobrenome;
    }

    public function calcularSalario() {
        return $this->horasTrabalhadas * $this->valorPorHora;
    }

   
    public function incrementarHoras($horas) {
        $this->horasTrabalhadas += $horas;
    }

    
    public function incrementarValorPorHora($valor) {
        $this->valorPorHora += $valor;
    }
}


$funcionario = new Funcionario("João", "Silva", 160, 20.0);


echo "Nome Completo: " . $funcionario->nomeCompleto() . "\n";

echo "Salário: R$ " . number_format($funcionario->calcularSalario(), 2, ',', '.') . "\n";

$funcionario->incrementarHoras(20);

echo "Salário com horas incrementadas: R$ " . number_format($funcionario->calcularSalario(), 2, ',', '.') . "\n";

$funcionario->incrementarValorPorHora(5);

echo "Salário com valor por hora incrementado: R$ " . number_format($funcionario->calcularSalario(), 2, ',', '.') . "\n";

?>
