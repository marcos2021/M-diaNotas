<?php
include "abrir_banco.php";

$nome = $_POST["txtnome"];
$disciplina = $_POST["txtdisciplina"];
$Nprofessor = $_POST["txtnprofessor"];
$Nportfolio = $_POST["txtnportfolio"];
$Navaliacao = $_POST["txtnavaliacao"];
$Nprovao = $_POST["txtnprovao"];
$media = (($Nprofessor*2 + $Nportfolio*2 + $Navaliacao*3 + $Nprovao * 3)/10);

$executa = "INSERT INTO notas (nome, disciplina, n_professor, n_portfolio, n_avaliacao, n_provao, media) VALUES ('$nome', '$disciplina', '$Nprofessor', '$Nportfolio', '$Navaliacao', '$Nprovao', '$media')";
 $query = $mysqli->query($executa);

echo "<fieldset>";
echo "<center><img src='checked.jpg' width='10%'>";
echo "<br><br><br>";
echo "<font color='red'>";
echo "<h1>Inclusão realizada com sucesso<br>";
echo "<br><br>";
echo "<a href = formulario.html>voltar</a></h1>";
echo "</font></center>";
echo "</fieldset>";



?>