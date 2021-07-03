<?php
require_once 'MyConnection.php';
require_once 'Pessoa.php';
class DAOPessoa {
    public $myconnection;
    public function DAOPessoa(){
        $this->myconnection=MyConnection::getConnection();
    }
    public function inserirPessoa($pessoa){
        $sql='insert into pessoa(nome,idade,cpf,sexo,id) values('.$pessoa->getNome().','.$pessoa->getIdade().','.$pessoa->getCpf().','.$pessoa->getSexo().','.$pessoa->getId().')';
        $result=$this->myconnection->query($sql);
        $this->myconnection->close();
        return $result;
    }
    public function deletarpessoaByNome($nome){
        $sql='delete from pessoa where nome='.$nome;
        $result=$this->myconnection->query($sql);
        $this->myconnection->close();
        return $result;
    }
    public function retornarTodas(){
        $sql='select *from pessoa';
        $result=$this->myconnection->query($sql);
        $this->myconnection->close();
        return $result;
    }
}
