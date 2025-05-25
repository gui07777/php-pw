<?php
session_start();

$candidato1 = 0;
$candidato2 = 0;
$candidato3 = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['etapa']) && $_POST['etapa'] === '1') {
    $totalEleitores = (int) $_POST['eleitores'];
    $_SESSION['total_eleitores'] = $totalEleitores;

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['etapa']) && $_POST['etapa'] === '2') {
    $votos = $_POST['votos'] ?? [];

    foreach ($votos as $voto) {
        if ($voto == 1) $candidato1++;
        elseif ($voto == 2) $candidato2++;
        elseif ($voto == 3) $candidato3++;
    }

    unset($_SESSION['total_eleitores']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Votação</title>
</head>
<body>

<?php if (!isset($_SESSION['total_eleitores'])): ?>
    <h2>Informe o número total de eleitores:</h2>
    <form method="post">
        <input type="number" name="eleitores" min="1" required>
        <input type="hidden" name="etapa" value="1">
        <button type="submit">Confirmar</button>
    </form>

<?php elseif ($_SERVER['REQUEST_METHOD'] !== 'POST'): ?>
    <h2>Votação</h2>
    <form method="post">
        <?php
        $total = $_SESSION['total_eleitores'];
        for ($i = 1; $i <= $total; $i++): ?>
            Eleitor <?= $i ?>: 
            <select name="votos[]">
                <option value="1">Candidato 1</option>
                <option value="2">Candidato 2</option>
                <option value="3">Candidato 3</option>
            </select><br><br>
        <?php endfor; ?>
        <input type="hidden" name="etapa" value="2">
        <button type="submit">Finalizar votação</button>
    </form>

<?php else: ?>
    <h2>Resultado da votação:</h2>
    <p>Candidato 1: <?= $candidato1 ?> votos</p>
    <p>Candidato 2: <?= $candidato2 ?> votos</p>
    <p>Candidato 3: <?= $candidato3 ?> votos</p>
<?php endif; ?>

</body>
</html>