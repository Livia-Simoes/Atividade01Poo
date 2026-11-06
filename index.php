<?php

require_once "produto.php";

//instanciando dois produtos diferentes
$p1 = new Produto("brownie", 8.00); //objeto
$p2 = new Produto("cheesecake", 15.00); //objeto

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>produtos</title>
</head>

<body>
    <h1>produtos</h1>
<?php

    $p1->mostrarProduto();
    $p2->mostrarProduto();
?>

</body>

</html>