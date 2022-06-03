<?php

require_once("../init.php");

class Banco{

protected $mysqli; //somente as funções que são ou serão criadas é possível acessar, é uma questão de segurança

public function __construct() {
    $this->conexao();
}

public function conexao(){
    $this->mysqli = new mysqli(BD_SERVIDOR,BD_USUARIO, BD_SENHA, BD_BANCO);
}

public function CadastraLivro($nome,$autor,$quantidade,$preco,$data){
    $stmt = $this->mysqli->prepare("insert into livros(`nome`,`autor`,`quantidade`,`preco`,`data`) values (?,?,?,?,?)");
    $stmt->bind_param($nome,$autor,$quantidade,$preco,$data);
    if($stmt->execute() == TRUE){
        return true;
    }else{
        return false;
    };

}
public function listaLivros(){ //lista todos os livros livros
    $result = $this->mysqli->query("select * from livros");
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $array[]=$row;
    }
    return $array;
}

public function pesquisaLivro($cod){ //vai trazer um livro especifico
    $result = $this->mysqli->query("select * from `livros` where `cod`='".$cod."'");
    return $result->fetch_array(MYSQLI_ASSOC);
}

public function excluirLivro($cod){
    if($this->mysqli->query("delete from `livros` where `cod`='".$cod."'") == TRUE){
        return true;
    }else{
        return false;
    };
}

public function atualizaLivro($cod,$nome,$autor,$quantidade,$preco,$flag,$data){
    $stmt = $this->mysqli->prepare("update `livros` set `nome`=?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?, `data`=? where `cod`=?");
    $stmt->bind_param($nome,$autor,$quantidade,$preco,$flag,$data,$cod);
    if($stmt->execute() == TRUE){
        return true;
    }else{
        return false;
    };
}
}
?>
