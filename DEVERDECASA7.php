<?php

include 'Retangulo.php';


$resultado = '';
$largura = '';
$altura = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calcular'])) {
    

   
    $largura = floatval($_POST['largura']);
    $altura = floatval($_POST['altura']);

    
    $retangulo = new Retangulo();
    $retangulo->setLadoMaior($largura);
    $retangulo->setLadoMenor($altura);

    
    $area = $retangulo->calculaArea();

    
    $resultado = "A área é: $area";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retângulo</title>
</head>
<body>
    <h1>Retângulo</h1>
    <?php if ($resultado) : ?>
        <!-- Mostra o resultado se o botão "Calcular" foi pressionado -->
        <p><?php echo $resultado; ?></p>
    <?php else : ?>
        <!-- Mostra o formulário se o botão "Calcular" não foi pressionado -->
        <form method="post">
            <label for="largura">Informe a largura:</label>
            <input type="number" name="largura" id="largura" value="<?php echo $largura; ?>" required>
            <br>
            <label for="altura">Informe a altura:</label>
            <input type="number" name="altura" id="altura" value="<?php echo $altura; ?>" required>
            <br>
            <input type="submit" name="calcular" value="Calcular Área">
        </form>
    <?php endif; ?>
</body>
</html>
