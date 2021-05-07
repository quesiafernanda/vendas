<?php 
include('conexao.php');
$idprod = $_GET['idprod'];

$sql = "delete from tblprodutos where idprod='$idprod'";

$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
} else{
    echo"Deu ruim... <a href='index.php'>Voltar</a>";
}