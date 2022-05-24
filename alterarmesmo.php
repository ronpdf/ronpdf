<?php

class Classe_alterarmesmo{
    public $var_fid_filme = null;
    public $var_fnome_filme = null;
    public $var_fobs_filme = null;
                        }

$obj_alteraumdb = new Classe_alterarmesmo;

$obj_alteraumdb->var_fid_filme = filter_input(INPUT_POST,'fid_filme_alt',FILTER_SANITIZE_STRING);
$obj_alteraumdb->var_fnome_filme = filter_input(INPUT_POST,'fnome_filme_alt',FILTER_SANITIZE_STRING);
$obj_alteraumdb->var_obs_filme = filter_input(INPUT_POST,'fobs_filme_alt',FILTER_SANITIZE_STRING);

//$obj_alteraumdb->var_fid_filme = $_POST['fid_filme_alt'];
//$obj_alteraumdb->var_fnome_filme = $_POST['fnome_filme_alt'];
//$obj_alteraumdb->var_obs_filme = $_POST['fobs_filme_alt'];

/*
echo $obj_alteraumdb->var_fid_filme;
echo '<br>';
echo $obj_alteraumdb->var_fnome_filme;
echo '<br>';
echo $obj_alteraumdb->var_obs_filme;
echo '<br>';
*/

$servername = "localhost";
$database = "id18803967_filmesdb2";
$username = "id18803967_ronald";
$password = "1!Acessofilmesdb2";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{ 
     //echo "Connected successfully";
     echo'<br>';

$sql = "update  filmes set 
nome = '$obj_alteraumdb->var_fnome_filme',
obs = '$obj_alteraumdb->var_obs_filme' 
where id = '$obj_alteraumdb->var_fid_filme'";




if (mysqli_query($conn, $sql)) {
  echo "Dados do filme atualizados com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo '<br>';
echo '<br>';
echo "ID do filme atualizado: ";
echo $obj_alteraumdb->var_fid_filme;
echo '<br>';
echo "NOME do filme atualizado: ";
echo $obj_alteraumdb->var_fnome_filme;
echo '<br>';
echo "OBS do filme atualizado: ";
echo $obj_alteraumdb->var_obs_filme;
echo '<br>';

     
    //  echo "fim";
     }  
mysqli_close($conn);


?>