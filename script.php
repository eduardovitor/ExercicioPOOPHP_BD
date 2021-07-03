<?php
require_once 'PessoaController.php';
require_once 'Pessoa.php';
$pessoacontroller=new PessoaController();
$pessoa=new Pessoa();
    if($_GET['a']=='inserir'){
        $pessoa->setNome($_POST['nome']);
        $pessoa->setCpf($_POST['cpf']);
        $pessoa->setSexo($_POST['sexo']);
        $pessoa->setIdade($_POST['idade']);
        $pessoa->setId($_POST['id']);
        $resultado=$pessoacontroller->inserirPessoa($pessoa);
        echo "".$resultado;
    }
    else if($_GET['a']=='deletar'){
        $nome=$_POST['nome'];
        $resultado=$pessoacontroller->deletarpessoabyNome($nome);
        echo "".$resultado;
    }
    else if($_GET['a']=='retornartodos'){
        $resultado=$pessoacontroller->retornarTodas();
        while($pessoas=$resutado->fetch_array()){
            echo $pessoas['nome'];
        }
    }
?>