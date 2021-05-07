<?php
include('conexao.php');
$sql = "select * from tblprodutos";
$qry = mysqli_query($conn,$sql);

?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Produtos</h1>
    <hr>
    <a href="cadastrar.php">Cadastrar Novo</a>  
    <table border='1'>
      <tr>
      <td>IDProd</td>
      <td>Prod</td>
      <td>Est</td>
      <td>Estmax</td>
      <td>Estmin</td>
      <td>Ações</td>
      </tr>

<?php      
  while ($linha=mysqli_fetch_array($qry)){

    echo"<tr>";
    echo"<td>".$linha['idprod']."</td>";
    echo"<td>".$linha['prod']."</td>";
    echo"<td>".$linha['est']."</td>";
    echo"<td>".$linha['estmax']."</td>";
    echo"<td>".$linha['estmin']."</td>";
    echo"<td> 
    <a href='editar.php?idprod={$linha["idprod"]}'>Editar</a>
    <a href='excluir.php?idprod={$linha["idprod"]}'>Excluir</a>
    <a href='vender.php?idprod={$linha["idprod"]}'>Vender</a>
    </td>
    ";
    echo"</td>";
    echo"</tr>";

  }

  ?>
</table>
</body>
</html>>