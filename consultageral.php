<?php
include "abrir_banco.php";

$executa = "select * from notas order by ra";
 $query = $mysqli->query($executa);

?>
<table border="1">
<tr>
 <th>ra</th>
 <th colspan="2">Nome</th>
 <th colspan="2">Disciplina</th>
 <th colspan="2">Nota professor</th>
 <th colspan="2">Nota portfolio</th>
 <th colspan="2">Nota avaliacao</th>
 <th colspan="2">Nota provao</th>
 <th colspan="2">Media</th>
</tr>

<?php

 while ($dados=mysqli_fetch_object($query))
{
 $ra = $dados->ra;
 echo "<u><b><i><font size=4>";
 echo "<tr><td>" . $dados->ra . "</td>";
 echo "</u></b></font>";
 echo "<td colspan='2'>" . $dados->nome . "</td>";
 echo "<td colspan='2'>" . $dados->disciplina . "</td>";
 echo "<td colspan='2'>" . $dados->n_professor . "</td>";
 echo "<td colspan='2'>" . $dados->n_portfolio . "</td>";
 echo "<td colspan='2'>" . $dados->n_avaliacao . "</td>";
 echo "<td colspan='2'>" . $dados->n_provao . "</td>";
 echo "<td colspan='2'>" . $dados->media . "</td>";
 echo "<td> <a href='editar.php?ra=$ra'><img src='editar.jpg' width='10%'> </a></td>"; 
 echo "<td> <a href='excluir.php?ra=$ra'><img src='delete.png' width='10%'> </a></td></tr>";
 echo "</i>";

}
$query->free();
// limpa a memoria das consultas do servidor
?>
</table>
<a href = "formulario.html">Voltar para formulario </a>