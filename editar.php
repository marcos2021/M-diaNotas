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

 echo "</i>";
}
$query->free();
?>  

<fieldset>
  <legend> Tela de alteracao de dados :
  </legend>
<!-- Aqui começa o formulário de incluir dados -->
<form method="POST" action="gravaedicao.php">
<input type="hidden" name="txtra"  value="<?php echo $ra ?>">

 <font color="gray">
  <h1> Alteracao de cadastro </h1>
 </font>

 <table>
  <tr>
  <th>Nome: </th>
<td><input type="text" name="txtnome" value="<?php echo $nome ?>"></td>
  </tr>
 <tr>
  <th> Disciplina: </th>
  <td><input type="text" name="txtdisciplina" value="<?php echo $disciplina ?>"></td>
  </tr>
  <tr>
  <th> Nota professor </th>
  <td><input type="text" name="txtnprofessor" value="<?php echo $Nprofessor ?>"></td>
  </tr>
  <tr>
  <th> Nota portfolio </th>
  <td><input type="text" name="txtnportfolio" value="<?php echo $Nportfolio ?>"></td>
  </tr>
  <tr>
  <th> Nota avaliacao </th>
  <td><input type="text" name="txtnavaliacao" value="<?php echo $Navaliacao ?>"></td>
  </tr>
  <tr>
  <th> Nota provao </th>
  <td><input type="text" name="txtnprovao" value="<?php echo $Nprovao ?>"></td>
  </tr>
    <th> Media </th>
  <td> <?php echo $media ?></td>
  </tr>
</table>
</u></b>
<br>
<input type="submit" value="Alterar" name="Alterar">
<a href="consultageral.php"><input type="button" value="Voltar" name="Voltar"> </a>
</form>

<!-- Aqui termina o formulário de incluir dados -->
</fieldset>