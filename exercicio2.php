<?php


class ContaCorrente {
    // Atributo saldo
    private $saldo;

    
    public function definirSaldoInicial($valor) {
        $this->saldo = $valor;
    }

    
    public function depositar($valor) {
        $this->saldo += $valor;
    }

    
    public function sacar($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente para o saque de R$ $valor\n";
        }
    }

    
    public function getSaldo() {
        return $this->saldo;
    }
}


class TestarContaCorrente {
    public static function main() {
        
        $novaConta = new ContaCorrente();
        
        
        $novaConta->definirSaldoInicial(1000);
        echo "Saldo inicial: R$ " . number_format($novaConta->getSaldo(), 2, ',', '.') . "\n";
        
        
        $novaConta->sacar(500);
        echo "Saldo após saque de 500 reais: R$ " . number_format($novaConta->getSaldo(), 2, ',', '.') . "\n";
        
        
        $novaConta->depositar(50);
        echo "Saldo após depósito de 50 reais: R$ " . number_format($novaConta->getSaldo(), 2, ',', '.') . "\n";
        
        
        $novaConta->sacar(600);
        echo "Saldo após saque de 600 reais: R$ " . number_format($novaConta->getSaldo(), 2, ',', '.') . "\n";
    }
}


TestarContaCorrente::main();

?>
