<?php
//Para Teste tirar a abstract e private
abstract class ClassConexao {
    
    //realiza a conexao com o banco de dados
    protected function conectaDB(){
        try {
            $Con = new PDO ("mysql: host=localhost; dbname=dbprogramacao","root","");
            return $Con;
            
        }catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
    
    
}
?>
