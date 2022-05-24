<?php
session_start();
class Deletarfilmedb{
    public $var_fid_deletar = null;
    
    public $var_dbid = null;
    public $var_dbnome = null;
    public $var_dbobs = null;
                        }

$obj_1 = new Deletarfilmedb;
$obj_1->var_fid_deletar = $_POST['fid_filme'];

$_SESSION['aaa']= $obj_1->var_fid_deletar;

$obj_2_db = new Deletarfilmedb;

//echo $obj_1->var_fid_deletar;





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


if($obj_1->var_fid_deletar != null)
//{echo "nao eh nulo";}else{echo "eh nulo";}

   { 
      $sql = mysqli_query($conn,"select id,nome,obs from filmes where id = '$obj_1->var_fid_deletar'") or die("erro no ID");

      while($dados=mysqli_fetch_assoc($sql))
      {
      $obj_2_db->var_dbid = $dados['id'];
      $obj_2_db->var_dbnome = $dados['nome'];
      $obj_2_db->var_dbobs = $dados['obs'];
      }
   }
   else
   {
      echo "precisa informar o ID do filme";
   }
mysqli_close($conn);
//echo "consultou e fechou";


           if ($obj_1->var_fid_deletar == $obj_2_db->var_dbid )
               {
                
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
                echo'<td >'.$obj_2_db->var_dbid.'</td>';
                echo'<td >'.$obj_2_db->var_dbnome.'</td>';
                echo'<td >'.$obj_2_db->var_dbobs.'</td>';
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
                echo"<a href='Deletarmesmo.php'>clique aqui para confirmar o filme  a ser deletado</a>";
                echo '</body>';
               //echo"<script language='JavaScript'>window.location='mostraumfilme.php'</script>";
               } 
               else 
               {
                
                echo "<body style='background-color:LightGrey'>";
                echo '<center>';
                echo '<br>'.'<br>'.'<br>';
                echo "filme inexistente!!!";
                echo '<br>';
                echo '<br>';
                //echo"<a href='consultaum.php'>clique aqui para voltar para a consulta de um filme</a>";
                echo '</center>';
                echo '</body>';
                //echo"<script language='JavaScript'>window.location='erro_umfilme.php'</script>";
               }
               
?>