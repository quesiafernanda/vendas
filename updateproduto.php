<?php 
include('conexao.php');
$idprod = $_POST['idprod'];
$prod = $_POST['prod'];
$est = $_POST['est'];

$sql = "UPDATE tblprodutos set prod='$prod',est='$est' where idprod='idprod'";

$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
} else{
    echo"Deu ruim... <a href='index.php'>Voltar</a>";
}