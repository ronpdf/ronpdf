<html>
 <head>
  <title>consulta um filme</title>
 </head>
 <body bgcolor="#4A7B15">
     <center>
         <br>
 <?php echo "<h1>Consulta um filme</h1>"; ?>
 <br>
 <br>
 <br>
 
 <form action="consultaumdb.php" method="post">
Informe o ID do filme: <input type=text name=fid><br>
<br>
<p>ou</p>
<br>
Informe o NOME do filme: <input type=text name=fnome><br>
<br>
<input type=submit value="OK">
</form>
</center>
 </body>
</html>