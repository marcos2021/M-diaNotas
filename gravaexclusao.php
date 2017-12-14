<?php
include "abrir_banco.php";

$ra = $_POST["txtra"];


$executa = "delete from notas where ra = $ra";
 $query = $mysqli->query($executa);

echo "<fieldset>";
echo "<center><img src='checked.jpg' width='10%'>";
echo "<br><br><br>";
echo "<font color='gray'>";
echo "<h1>Exclusao realizada com sucesso<br>";
echo "<br><br>";
echo "<a href = consultageral.php>voltar</a></h1>";
echo "</font></center>";
echo "</fieldset>";



?>