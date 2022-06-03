<?php 

require_once('banco.php');
    class Livro extends Banco{
        private $codigo;
        private $nome;
        private $autor;
        private $quantidade;
        private $preco;
        private $flag;
        private $data;

public function setCodigo($codigo){ //setar um valor para o kjgkjkhgatributo
    $this->codigo = $codigo;
}
public function getCodigo(){
    return $this->codigo;
}

public function setNome($nome){ //setar um valor para atributo
    $this->nome = $nome;
}

public function getNome(){
    return $this->nome;
}

public function setAutor($autor){ //setar um valor para atributo
    $this->autor = $autor;
}
public function getAutor(){
    return $this->autor;
}

public function setQuantidade($quantidade){ //setar um valor para atributo
    $this->quantidade = $quantidade;
}
public function getQuantidade(){
    return $this->quantidade;
}

public function setPreco($preco){ //setar um valor para atributo
    $this->preco = $preco;
}
public function getPreco(){
    return $this->preco;
}

public function setFlag($flag){ //setar um valor para atributo
    $this->flag = $flag;
}
public function getFlag(){
    return $this->flag;
}

public function setData($data){ //setar um valor para atributo
    $this->data = $data;
}
public function getData(){
    return $this->data;
}


}
?>