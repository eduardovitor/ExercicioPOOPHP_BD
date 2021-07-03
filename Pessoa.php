<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Familia Vieira
 */
class Pessoa {
    private $nome;
    private $sexo;
    private $idade;
    private $cpf;
    private $id;
    public function Pessoa(){
        
    }
    public function getNome(){
        return $this->nome;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function setId($id){
        $this->id=$id;
    }
}
