<form method="post">
    <label>Digite as notas separadas por vírgula:</label><br>
    <input type="text" name="notas" required>
    <button type="submit">Document</button>
</form>

<?php
if (isset($_POST['notas'])) {
    $entrada = $_POST['notas'];
    $valores = explode(',', $entrada);
    $soma = 0;
    $quantidade = count($valores);

    for ($i = 0; $i < $quantidade; $i++) {
        $nota = floatval(str_replace(',', '.', trim($valores[$i])));
        $soma += $nota;
    }

    if ($quantidade > 0) {
        $media = $soma / $quantidade;
        echo "<h3>Média: " . number_format($media, 2, ',', '.') . "</h3>";
    } else {
        echo "Nenhuma nota válida foi informada.";
    }
}
?>
