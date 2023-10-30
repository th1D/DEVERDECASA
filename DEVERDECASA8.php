<?php

$inicio = isset($_POST['inicio']) ? intval($_POST['inicio']) : 1;
$fim = isset($_POST['fim']) ? intval($_POST['fim']) : 1;

function exibirTodosNumeros($inicio, $fim) {
    for ($i = $inicio; $i <= $fim; $i++) {
        echo $i . "<br>";
    }
}


function exibirPares($inicio, $fim) {
    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
}


function exibirImpares($inicio, $fim) {
    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mostrar'])) {
    

    $tipoMostrar = $_POST['tipo_mostrar'];

    
    if ($tipoMostrar === 'todos') {
        exibirTodosNumeros($inicio, $fim);
    } elseif ($tipoMostrar === 'pares') {
        exibirPares($inicio, $fim);
    } elseif ($tipoMostrar === 'impares') {
        exibirImpares($inicio, $fim);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sequência</title>
</head>
<body>
    <h1>Sequência</h1>
    <form method="post">
        <label for="inicio">Selecione o valor inicial:</label>
        <input type="number" name="inicio" id="inicio" value="<?php echo $inicio; ?>" required>
        <br>
        <label for="fim">Selecione o valor final:</label>
        <input type="number" name="fim" id="fim" value="<?php echo $fim; ?>" required>
        <br>
        <label>Mostrar:</label>
        <select name="tipo_mostrar">
            <option value="todos">Todos</option>
            <option value="pares">Apenas os pares</option>
            <option value="impares">Apenas os ímpares</option>
        </select>
        <br>
        <input type="submit" name="mostrar" value="Mostrar Sequência">
    </form>
</body>
</html>
