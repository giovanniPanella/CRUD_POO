<?php
//include '../Class/ClassConexao.php';
include_once('C:\xampp\htdocs\CRUD_POO1\Class\ClassConexao.php');
class ClassCrud extends ClassConexao{
    //atributos
    private $Crud;
    private $Contador;
    
    //preparação das Declarativas
    private function preparedStatements ($Query, $Parametros){
        $this->countParametros($Parametros);
        $this->Crud= $this->conectaDB()->prepare($Query);
        
        if($this->Contador>0){
            for($i=1;$i <= $this->Contador; $i++){
                $this->Crud->bindValue($i,$Parametros[$i -1]);
            }
        }
            $this->Crud->execute();
    }
    //contador de parametros
    private function countParametros($Parametros){
        $this->Contador= count($Parametros);
    }

    //inserção no BD
    public function insertDB($Tabela , $Condicao , $Parametros){
    $this->preparedStatements("insert into {$Tabela} values ({$Condicao})" , $Parametros);
    return $this->Crud;
    }
    
    //Selecao no Banco de Dados
    public function selectDB($Campos , $Tabela , $Condicao , $Parametros){
    $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}",$Parametros);
    return $this->Crud;
    }
    //Deletar Dados no BD
    public function deleteDB($Tabela, $Condicao, $Parametros ){
        $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Parametros);
        return $this->Crud;
        
        }
    //Atualização no banco de dados
    public function updateDB($Tabela , $Set , $Condicao , $Parametros)
    {
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}",$Parametros);
        return $this->Crud;
    }
    
}
