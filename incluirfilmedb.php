<?php

class Classe_incluiumdb{
    public $var_fid_filme = null;
    public $var_fnome_filme = null;
    public $var_fobs_filme = null;
                        }

$obj_incluiumdb = new Classe_incluiumdb;
$obj_incluiumdb->var_fid_filme = $_POST['fid_filme'];
$obj_incluiumdb->var_fnome_filme = $_POST['fnome_filme'];
$obj_incluiumdb->var_obs_filme = $_POST['fobs_filme'];

/*
echo $obj_incluiumdb->var_fid_filme;
echo '<br>';
echo $obj_incluiumdb->var_fnome_filme;
echo '<br>';
echo $obj_incluiumdb->var_obs_filme;
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

$sql = "insert into filmes (id,nome,obs) values  ('$obj_incluiumdb->var_fid_filme',' $obj_incluiumdb->var_fnome_filme','$obj_incluiumdb->var_obs_filme')";

if (mysqli_query($conn, $sql)) {
  echo "Filme inserido com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo '<br>';
echo '<br>';
echo "ID do filme inserido: ";
echo $obj_incluiumdb->var_fid_filme;
echo '<br>';
echo "NOME do filme inserido: ";
echo $obj_incluiumdb->var_fnome_filme;
echo '<br>';
echo "OBS do filme inserido: ";
echo $obj_incluiumdb->var_obs_filme;
echo '<br>';

     
    //  echo "fim";
     }  
mysqli_close($conn);


?>