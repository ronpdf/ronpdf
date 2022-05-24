<?php
session_start();
$c = $_SESSION['aaa'];
//echo "session - - - conteudo de c: ";
//echo $c;
//echo '<br>';

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

 // sql to delete a record
$sql = "DELETE FROM filmes WHERE id=$c";

if (mysqli_query($conn, $sql)) {
    echo "Filme deletado com sucesso";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
//echo "fim";   

mysqli_close($conn);
?>