<?php
require 'class.php';
$config = new Config;
$config->Var();


class CRUD extends Dados{

    public function Create(){
        $cmd = $this->conexao->prepare("INSERT INTO personagem VALUES(:Id, :Nome, :Anime)");
        $cmd->bindValue(':Id', $this->id);
        $cmd->bindValue(':Nome',$this->nome);
        $cmd->bindValue(':Anime',$this->anime);
        $cmd->execute();
    }
    public function Read(){
        $cmd = $this->conexao->query("SELECT *FROM personagem ORDER BY Nome");
        while($stmt = $cmd->fetch()):
        require 'public/tableview.php';
        endwhile;
       
    }

    public function Update($id){
        $stmt = $this->conexao->prepare("UPDATE personagem SET Nome =:n, Anime =:a WHERE Id_P =:i");
        $stmt->bindValue(':n',$this->nome);
        $stmt->bindValue(':a',$this->anime);
        $stmt->bindValue(':i',$id);
        $stmt->execute();

    }

    public function Select($idup){
        $cmd = $this->conexao->query("SELECT *FROM personagem WHERE Id_P ='{$idup}'");
        $this->command = $cmd->fetch();
        
    }

    public function Delete($id){
        $this->conexao->query("DELETE FROM personagem WHERE Id_P ='{$id}'");
    }

   
}
$crud = new CRUD($config->var['dbname'],$config->var['host'],$config->var['char'],$config->var['root'],$config->var['pass']);
$crud->nome = ltrim(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING));
$crud->anime = ltrim(filter_input(INPUT_POST,'anime',FILTER_SANITIZE_STRING));
$crud->id = time();
if(isset($_GET["IdUp"])): 
    $idup = filter_input(INPUT_GET,"IdUp",FILTER_SANITIZE_NUMBER_INT);
    $crud->Select($idup);
  
endif;
if(isset($_POST["submit"])):
    $opc = $_POST["submit"];
    switch($opc): 
        case "ACTUALIZAR": 
        $idu = filter_input(INPUT_GET,"idu",FILTER_SANITIZE_NUMBER_INT);
        $crud->Update($idu);
        require 'public/redirecion.php';
       
        break;
        case "CADASTRAR": 
        if(empty($crud->nome) or empty($crud->anime)): 
            require 'public/error.php';
        else:
        $crud->Create();
        endif;
        break;

    endswitch;
  
      
      

endif;




if(isset($_GET['del'])):
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $crud->Delete($id);
endif;





