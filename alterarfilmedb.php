<?php
session_start();
class Alterarfilmedb{
    public $var_fid_alterar = null;
    
    public $var_dbid = null;
    public $var_dbnome = null;
    public $var_dbobs = null;
    public $v1 = null;
                        }

$obj_1 = new Alterarfilmedb;
$obj_1->var_fid_alterar = $_POST['fid_filme_ent'];

$_SESSION['bbb']= $obj_1->var_fid_alterar;

$obj_2_db = new Alterarfilmedb;

//echo $obj_1->var_fid_alterar;

$v1 = $_POST['fid_filme_ent'];



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


//if($obj_1->var_fid_alterar != null)
//{echo "nao eh nulo";}else{echo "eh nulo";}

 
      $sql = mysqli_query($conn,"select id,nome,obs from filmes where id = '$obj_1->var_fid_alterar'") or die("erro no ID");

      while($dados=mysqli_fetch_assoc($sql))
      {
      $obj_2_db->var_dbid = $dados['id'];
      $obj_2_db->var_dbnome = $dados['nome'];
      $obj_2_db->var_dbobs = $dados['obs'];
      }
   echo   $obj_2_db->var_dbid;
      echo $obj_2_db->var_dbnome;
      echo $obj_2_db->var_dbobs;
      
if    ($obj_2_db->var_dbid != $obj_1->var_fid_alterar)   {
    echo '<br>';
    echo '<br>';
    echo '<h1>filme inexistente</h1>';
    echo '<br>';
    echo '<br>';
}else{
    echo "blz";
}
 
   
mysqli_close($conn);
echo "consultou e fechou";
?>

    <html>      
               <body style='background-color:LightGrey'>
                <br><br><br><br>
              <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dados do filme que podem ser alterados:</h3>
              <br>
                 <table width="60% border="1" cellpadding="4" cellspacing="7">
                  <tr align="center" BGCOLOR="green">
                          <td width="5%">Id</td>
                          <td >Nome do filme</td>
                          <td >Obs</td>
                       </tr> 
                
                   <tr align="center">
                <form action="alterarmesmo.php" method="post">
               
               
                <td><input type=text name=fid_filme_alt value=    "<?php echo $obj_2_db->var_dbid;?>"</td>
                <td ><input type=text name=fnome_filme_alt value= "<?php echo $obj_2_db->var_dbnome;?>"</td>
                <td ><input type=text name=fobs_filme_alt value= "<?php echo $obj_2_db->var_dbobs;?>"</td>
                
                    </tr>
                <tr align="center">
                          <td ></td>
                    </tr>
                    
                    </tr>
                <tr align="center">
                          <td ></td>
                    </tr>
                    
                    </tr>
                <tr align="center">
                          <td ></td>
                    </tr>
                    
                    
                    </tr>
                <tr align="center">
                          <td ></td>
                          
                          <td><input type=submit value="Enviar">
                    </tr>
                    </form>
                    </table>
                    <br><br><br><br><br><br>
              
                
              
                
               