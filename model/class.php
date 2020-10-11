<?php
require 'conexao.php';
class Config{
    public $var;
    public function Var(){
        $this->var = array(
            "dbname"=>"anime",
            "host"=>"localhost",
            "char"=>"utf8",
            "root"=>"root",
            "pass"=>""
        );
    }

}
class Dados extends Conexao{
    public $nome, $anime, $id,$command;
}


