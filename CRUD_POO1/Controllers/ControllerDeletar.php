<?php
include("../Class/ClassCrud.php");
    $Crud=new ClassCrud();
    $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
    $Crud->deleteDB(
        "cadastro",
        "id=?",
        array(
            $IdUser 
        )
    );
    header("Location: ../selecao.php");
?>