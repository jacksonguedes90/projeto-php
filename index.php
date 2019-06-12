<?php
include 'conn.php';

$sql ="SELECT * from BANDAS";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border=1>
<th>ID</th>
<th>Nome</th>
<th>Data cadastro</th>
<th></th>
<th></th>
    <thead>
    <?php while($dados = $result->fetch_assoc()){ 
  $id = $dados['ID_BANDAS'];
?>
    <tbody>
    <td><?php echo $dados ['ID_BANDAS']; ?></td>
    <td><?php echo $dados ['NOME_BANDAS']; ?></td>
    <td><?php echo $dados ['DATA_CADASTRO']; ?></td>
    <td><?php echo "<a href='http://localhost/projPHP/projeto-php/Alterar.php?id=$id'>Alterar</a>";?></td>
    <td><?php echo "<a href='http://localhost/projPHP/projeto-php/excluir.php?id=$id'>Excluir</a>";?></td>
    </tbody>
    <?php } ?>
    </thead>
    </table>
</body>
</html>