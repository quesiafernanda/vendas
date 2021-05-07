<?php
include('conexao.php');
$idprod = $_GET['idprod'];
//echo $idprod;

$sql ="select * from tblprodutos where idprod='idprod'";
$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);

$idprod = $linha['idprod'];
$prod = $linha['prod'];
$est = $linha['est'];

?>
<form action="updateproduto.php" method="post">
idprod  <input type="text" name="idprod" value="<?php echo $idprod ?> "readonly>
prod    <input type="text" name="prod"   value="<?php echo $prod ?>">
est     <input type="text" name="est"    value="<?php echo $est ?>">
<input type="submit" value="Atualizar">

</form>