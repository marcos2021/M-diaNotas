<?php
include "abrir_banco.php";

$ra = $_POST["txtra"];
$nome = $_POST["txtnome"];
$disciplina = $_POST["txtdisciplina"];
$Nprofessor = $_POST["txtnprofessor"];
$Nportfolio = $_POST["txtnportfolio"];
$Navaliacao = $_POST["txtnavaliacao"];
$Nprovao = $_POST["txtnprovao"];
$media = (($Nprofessor*2 + $Nportfolio*2 + $Navaliacao*3 + $Nprovao * 3)/10);

$executa = "UPDATE notas SET nome = '$nome',  disciplina = '$disciplina' ,  n_professor = '$Nprofessor', n_portfolio = '$Nportfolio' , n_avaliacao = '$Navaliacao', n_provao = '$Nprovao', media = '$media'  where ra = $ra";
 $query = $mysqli->query($executa);

echo "<fieldset>";
echo "<center><img src='checked.jpg' width='10%'>";
echo "<br><br><br>";
echo "<font color='gray'>";
echo "<h1>Alteracao realizada com sucesso<br>";
echo "<br><br>";
echo "<a href = consultageral.php>voltar</a></h1>";
echo "</font></center>";
echo "</fieldset>";



?>