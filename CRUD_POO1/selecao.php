 <?php 
    include_once 'Includes/Header.php';
    include_once 'Class/ClassCrud.php';

?> 

        <div class="Content">
            <table class="TabelaCrud">
                <tr>
                    <td>Nome</td>
                    <td>Sexo</td>
                    <td>Cidade</td>
                    <td>Ações</td>
                </tr>
                 <!-- Estrutura de loop -->
                <?php
                    $Crud=new ClassCrud();
                    $BFetch=$Crud->selectDB(
                        "*", //todos dos cadastros
                        "cadastro", //nome tab
                        "", //condição
                        array()
                    );
                    //buscando os dados
                    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $Fetch['nome']; ?></td>
                    <td><?php echo $Fetch['sexo']; ?></td>
                    <td><?php echo $Fetch['cidade']; ?></td>
                    <td>
                        <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="Images/Visualizar.png" alt="Visualizar"></a>
                        <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><img src="Images/Edite.png" alt="Editar"></a>
                        <a href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['id']}";?>"><img src="Images/Lixeira.png" alt="Deletar"></a>
                    </td>
                </tr>
                <?php } ?>
                
            </table>
        </div>
 <?php include ("Includes/Footer.php"); ?> 