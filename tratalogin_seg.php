<?php

class Classe_login{
    public $var_flogin = null;
    public $var_fsenha = null;
    
    public function checasenha(){
        echo "oiii";
    }
}

$obj_login = new Classe_login;
$obj_login->var_flogin = $_POST['flogin'];
echo $obj_login->var_flogin; 

echo '<br>';

$obj_login->var_fsenha = $_POST['fsenha'];
echo $obj_login->var_fsenha; 

echo '<br>';

$obj_login->checasenha();

?>