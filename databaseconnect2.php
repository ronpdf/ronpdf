<?php
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
echo "Connected successfully";
echo'<br>';
echo'<br>';

$sql = mysqli_query($conn,"select * from filmes") or die("Erro");



echo '<table width="60% border="1" cellpadding="4" cellspacing="7">' ;
echo    '<tr align="center" BGCOLOR="green">';
echo          '<td width="5%">Id</td>'; 
echo          '<td >Nome</td>';
echo          '<td >Obs</td>';
echo        '</tr> ';
while($dados=mysqli_fetch_assoc($sql))
{
    echo'<br>';
    
echo    '<tr align="center">';
echo'<td >'.$dados['id'].'</td>';
echo'<td >'.$dados['nome'].'</td>';
echo'<td >'.$dados['obs'].'</td>';
echo    '</tr>';


}
echo '</table>';
mysqli_close($conn);
?>