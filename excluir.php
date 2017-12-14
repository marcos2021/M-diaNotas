<?php
include "abrir_banco.php";
 $ra = $_GET["ra"];
 $executa = "select * from notas where ra = $ra";
 $query = $mysqli->query($executa);

 while ($dados=mysqli_fetch_object($query))
{
 echo "<u><b><i>";
$nome = $dados->nome ;
$disciplina = $dados->disciplina ;
$Nprofessor =  $dados->n_professor ;
$Nportfolio =  $dados->n_portfolio ;
$Navaliacao =  $dados->n_avaliacao ;
$Nprovao =  $dados->n_provao ;
$media = $dados->media;
 echo "</i></u></b>";
}
$query->free();
?>  

<fieldset>
  <legend> Tela de exclusão de dados :
  </legend>
<!-- Aqui começa o formulário de incluir dados -->
<form method="POST" action="gravaexclusao.php">
<input type="hidden" name="txtra"  value="<?php echo $ra ?>">

 <font color="gray">
  <h1> Excluir de contatos </h1>
 </font>

 <table>
  <tr>
  <th>Nome: </th>
<td><?php echo $nome ?></td>
  </tr>
 <tr>
  <th> Disciplina: </th>
  <td><?php echo $disciplina ?></td>
  </tr>
  <tr>
  <th> Nota professor </th>
  <td><?php echo $Nprofessor ?></td>
  </tr>
  <tr>
  <th> Nota portfolio </th>
  <td><?php echo $Nportfolio ?></td>
  </tr>
  <tr>
  <th> Nota avaliacao </th>
  <td><?php echo $Navaliacao ?></td>
  </tr>
  <tr>
  <th> Nota provao </th>
  <td><?php echo $Nprovao ?></td>
  </tr>
    <tr>
  <th> Media </th>
  <td><?php echo $media ?></td>
  </tr>
</table>
<br>
<input type="submit" value="Excluir" name="Enviar">
<a href="consultageral.php"><input type="button" value="Voltar" name="Voltar"> </a>


</form>

<!-- Aqui termina o formulário de incluir dados -->
</fieldset>
