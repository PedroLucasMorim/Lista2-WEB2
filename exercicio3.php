<?php

class Cachorro {
    
    private $nome;
    private $raca;

    
    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }
   
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
    }
}


$cachorro1 = new Cachorro("Julian", "Pastor Alemão");
$cachorro2 = new Cachorro("Ferdinando", "Labrador");


echo "Cachorro 1 - Nome: " . $cachorro1->getNome() . ", Raça: " . $cachorro1->getRaca() . "\n";
echo "Cachorro 2 - Nome: " . $cachorro2->getNome() . ", Raça: " . $cachorro2->getRaca() . "\n";


$cachorro1->setNome("Ghost");
$cachorro1->setRaca("Husky Siberiano");

$cachorro2->setNome("Bella");
$cachorro2->setRaca("Golden Retriever");


echo "Cachorro 1 (Atualizado) - Nome: " . $cachorro1->getNome() . ", Raça: " . $cachorro1->getRaca() . "\n";
echo "Cachorro 2 (Atualizado) - Nome: " . $cachorro2->getNome() . ", Raça: " . $cachorro2->getRaca() . "\n";

?>
