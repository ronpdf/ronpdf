<?php

class Classe_consultaum{
    public $var_fid = null;
    public $var_fnome = null;
    
    public $var_dbid = null;
    public $var_dbnome = null;
    public $var_dbobs = null;
                        }

$obj_consultaum = new Classe_consultaum;
$obj_consultaum->var_fid = $_POST['fid'];
$obj_consultaum->var_fnome = $_POST['fnome'];

$obj_dbconsultaum = new Classe_consultaum;

//echo $obj_consultaum->var_fid;

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


if($obj_consultaum->var_fid != null)
//{echo "nao eh nulo";}else{echo "eh nulo";}

   { 
      $sql = mysqli_query($conn,"select id,nome,obs from filmes where id = '$obj_consultaum->var_fid'") or die("Erro no select por id");

      while($dados=mysqli_fetch_assoc($sql))
      {
      $obj_dbconsultaum->var_dbid = $dados['id'];
      $obj_dbconsultaum->var_dbnome = $dados['nome'];
      $obj_dbconsultaum->var_dbobs = $dados['obs'];
      }
   }
   else
   {
      $sql = mysqli_query($conn,"select id, nome,obs from filmes where nome = '$obj_consultaum->var_fnome'") or die("Erro no select por nome");

      while($dados=mysqli_fetch_assoc($sql))
      {
      $obj_dbconsultaum->var_dbid = $dados['id'];
      $obj_dbconsultaum->var_dbnome = $dados['nome'];
      $obj_dbconsultaum->var_dbobs = $dados['obs'];
      } 
   }
mysqli_close($conn);
//echo "consultou e fechou";


           if ($obj_consultaum->var_fid == $obj_dbconsultaum->var_dbid and $obj_consultaum->var_fnome == null or 
               $obj_consultaum->var_fnome == $obj_dbconsultaum->var_dbnome and $obj_consultaum->var_fid == null)
               {
                /*
                echo "id iguais";
                echo '<br>';
                echo "conteudo de id por formulario: ";
                echo $obj_consultaum->var_fid;
                echo '<br>';
                echo "conteudo de id vindo do db: ";
                echo $obj_dbconsultaum->var_dbid;
                
                echo '<br>';
                echo "conteudo de nome por formulario: ";
                echo $obj_consultaum->var_fnome;
                echo '<br>';
                echo "conteudo de nome vindo do db: ";
                echo $obj_dbconsultaum->var_dbnome;
                
                echo '<br>';
                echo "conteudo de obs vindo do db: ";
                echo $obj_dbconsultaum->var_dbobs;
                
                echo '<br>';
                echo "*********vai pra pagina de exibir os dados do filme";
                */
                echo "<body style='background-color:LightGrey'>";
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<table width="60% border="1" cellpadding="4" cellspacing="7">' ;
                echo    '<tr align="center" BGCOLOR="green">';
                echo          '<td width="5%">Id</td>'; 
                echo          '<td >Nome do filme</td>';
                echo          '<td >Obs</td>';
                echo        '</tr> ';
                
                echo    '<tr align="center">';
                echo'<td >'.$obj_dbconsultaum->var_dbid.'</td>';
                echo'<td >'.$obj_dbconsultaum->var_dbnome.'</td>';
                echo'<td >'.$obj_dbconsultaum->var_dbobs.'</td>';
                echo    '</tr>';
                echo '</table>';
                echo '<br>';
                echo '<br>';
                echo '<br>';echo '<br>';echo '<br>';echo '<br>';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
                echo"<a href='consultaum.php'>clique aqui para consultar outro filme</a>";
                echo '</body>';
               //echo"<script language='JavaScript'>window.location='mostraumfilme.php'</script>";
               } 
               else 
               {
                /*
                echo "diferentes";
                echo '<br>';
                echo "conteudo de id por formulario: ";
                echo $obj_consultaum->var_fid;
                echo '<br>';
                echo "conteudo de id vindo do db: ";
                echo $obj_dbconsultaum->var_dbid;
                echo '<br>';
                echo "conteudo de nome por formulario: ";
                echo $obj_consultaum->var_fnome;
                echo '<br>';
                echo "conteudo de nome vindo do db: ";
                echo $obj_dbconsultaum->var_dbnome;
                
                echo '<br>';
                echo "conteudo de obs vindo do db: ";
                echo $obj_dbconsultaum->var_dbobs;
                
                echo '<br>';
                echo "*********msg de erro de consulta de um filme";
                */
                echo "<body style='background-color:LightGrey'>";
                echo '<center>';
                echo '<br>'.'<br>'.'<br>';
                echo "filme inexistente!!!";
                echo '<br>';
                echo '<br>';
                echo"<a href='consultaum.php'>clique aqui para voltar para a consulta de um filme</a>";
                echo '</center>';
                echo '</body>';
                //echo"<script language='JavaScript'>window.location='erro_umfilme.php'</script>";
               }
               
?>