<?php
//objetos
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = nome;
        $this->idade = idade;
    }

    public function printNomeEIdade(){
        echo $this->nome;
        echo "<br>";
        echo $this->idade;
    }
    echo "<br>";
    $pessoa = new Pessoa ("Fred","22");
    $pessoa->printNomeEIdade();

}
?>