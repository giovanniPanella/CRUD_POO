<?php
include_once '../Includes/Variaveis.php';
//include ("Class/ClassConexao.php");
include_once '../Class/ClassCrud.php';

//echo "oi";
//echo "$Nome<br> $Sexo<br> $Cidade<br>";
        
$Crud=new ClassCrud();

if($Acao=='Cadastrar'){
        $Crud->insertDB(
            "cadastro",
            "?,?,?,?",
            array(
                $Id,
                $Nome,
                $Sexo,
                $Cidade
            )
        );
        echo "Cadastro Realizado com Sucesso!";
}else{
        $Crud->updateDB(
            "cadastro",
            "Nome=?,Sexo=?,Cidade=?",
            "Id=?",
            array(
                $Nome,
                $Sexo,
                $Cidade,
                $Id
            )
        );
        header("Location: ../selecao.php");
        echo "Cadastro Editado com Sucesso!";
}