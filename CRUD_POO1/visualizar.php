<?php
include("Includes/Header.php");
include("Class/ClassCrud.php");
?>
<div class="Content">
    <?php
        $Crud=new ClassCrud();
        $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "cadastro",
            "where id=?",
            array($IdUser)
        );
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Dados do Usuário</h1>
    <hr>
    <strong>Nome:</strong> <?php echo $Fetch['nome']; ?><br>
    <strong>Cidade:</strong> <?php echo $Fetch['cidade']; ?><br>
    <strong>Sexo:</strong> <?php echo $Fetch['sexo']; ?><br>
    <div class="FormularioInput FormularioInput100 Center">
        <a href="selecao.php"><button>Voltar</button></a>
    </div>
</div>

<?php include("Includes/Footer.php"); ?>
