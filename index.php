<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p> Cadastro de pessoas</p>
        <form action="script.php?a=inserir" method="POST">
            <label> Nome: </label>
            <input type="text" name="nome">
            <label> CPF: </label>
            <input type="text" name="cpf">
            <label> Sexo: </label>
            <input type="text" name="sexo">
            <label> Idade: </label>
            <input type="number" name="idade">
            <label> ID: </label>
            <input type="number" name="id">
            <input type="submit" value="Concluir">
        </form>
    </body>
</html>
