<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'DAOPessoa.php';
/**
 * Description of PessoaController
 *
 * @author Familia Vieira
 */
class PessoaController {
    private $daopessoa;
    function PessoaController(){
        $this->daopessoa=new DAOPessoa();
    }
    public function inserirPessoa($pessoa){
        $this->daopessoa->inserirPessoa($pessoa);
    }
    public function deletarpessoabyNome($nome){
        $this->daopessoa->deletarpessoabyNome($nome);
    }
    public function retornarTodas(){
        return $this->daopessoa->retornarTodas();
    }
}
