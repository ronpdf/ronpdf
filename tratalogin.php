<?php

class Classe_login{
    public $var_flogin = null;
    public $var_fsenha = null;
    public $var_dbsenha = null;
    
   /* public function comparasenhas(){
        echo'<br>';echo'<br>';
        echo "comparando";
           if ($obj_db->var_dbsenha == $obj_login->var_fsenha)
               {
               echo "iguais";
               } 
               else 
               {
                echo "diferentes";
               }
        
                                    }*/
                  }

$obj_login = new Classe_login;
$obj_login->var_flogin = $_POST['flogin'];
//echo "login vindo do formulario";echo '<br>';
//echo $obj_login->var_flogin; 

//echo '<br>';

$obj_login->var_fsenha = $_POST['fsenha'];
//echo "senha vinda do formulario";echo '<br>';
//echo $obj_login->var_fsenha; 

//echo '<br>';echo '<br>';




$obj_db = new Classe_login;
//****************************************************************
$servername = "localhost";
$database = "id18803967_filmesdb2";
$username = "id18803967_ronald";
$password = "1!Acessofilmesdb2";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//echo'<br>';

$sql = mysqli_query($conn,"select tsenha from tabela_login where tlogin = '$obj_login->var_flogin'") or die("Erro no select");

while($dados=mysqli_fetch_assoc($sql))
{
 
$obj_db->var_dbsenha = $dados['tsenha'];

}
mysqli_close($conn);
//echo "senha vinda do db";echo '<br>';
//echo $obj_db->var_dbsenha;

//$obj_comp = new Classe_login;
//$obj_comp->comparasenhas();

        //echo'<br>';echo'<br>';
        //echo "comparando";echo'<br>';
           if ($obj_db->var_dbsenha == $obj_login->var_fsenha)
               {
               //echo "iguais";
               echo"<script language='JavaScript'>window.location='principal.php'</script>";
               } 
               else 
               {
                //echo "diferentes";
                echo"<script language='JavaScript'>window.location='erro_login.php'</script>";
               }
?>