<?php
try{
    class Conexao{
        public $conexao;
        public function __construct($dbname,$host,$char,$root,$pass){
            $this->conexao = new PDO("mysql:dbname={$dbname};host={$host};charset={$char}",$root,$pass);
            $this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            
        }
    }

}catch(PDOException $e){
    print('Error '.$e->getMessage());
}