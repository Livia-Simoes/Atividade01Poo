<?php

//classe
class Produto {
   // atributos
    public $nome;
    public $preco;
    //construtor
    public function __construct($nome, $preco) {
        $this->nome = $nome; //o this representa o objeto que ta sendo instanciado
        $this->preco = $preco;
    }
   // metodo para mostrar o produto
    public function mostrarProduto() {
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: R$ " . $this->preco . "<br><br>";
    }
}

?>