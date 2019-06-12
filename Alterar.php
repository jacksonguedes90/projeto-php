<?php
include 'conn.php';

$id = $_GET['id'];
$sql = "SELECT  NOME_BANDAS from BANDAS where ID_BANDAS = $id";
$result = $conn->query($sql);
$dados = $result->fetch_assoc();
$nome = $dados['NOME_BANDAS'];

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
    <form action="updade.php" method="post">
    <label for="">Nome da banda</label>
    <input type="text" name="band" value="<?php echo $nome;?>"><br>
    <input type="submit" value='Alterar'>
    </form>
</body>
</html>