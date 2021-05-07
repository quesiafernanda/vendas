<?php

include('conexao.php');


$idprod = $_POST['idprod'];
$qtdvendida = $_POST['qtdvendida'];
$estoque  = $_POST['estoque'];

echo $estoque."<br>";
echo $qtdvendida;


$qtdatualizada = $estoque - $qtdvendida;

echo "<br>".$qtdatualizada;



if($qtdatualizada >0){
    
$sql = "UPDATE tblprodutos set estoque='$qtdatualizada'
where idprod='$idprod'";

mysqli_query($conn,$sql);
header("Location:index.php");


} else {
echo  'Quantidade inexistente.';

}
