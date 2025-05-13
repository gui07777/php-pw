<?php
/** comentario em bloco
 * + adição
 * - subtraçao
 * * multiplicaçao
 * / divisao
 * % resto da divisao
 */

 // comentario em linha



echo "<h1>Operador de adiçao<h1> <br>";

$primeiroNumero = 10;
$segundoNumero = 90;

$resultado = $primeiroNumero + $segundoNumero;

echo "$primeiroNumero + $segundoNumero = $resultado";
echo"<br><hr>";

echo "<h1>Operador de subtraçao<h1> <br>";

$numero1 = 40;
$numero2 = 100;

$result = $numero1 - $numero2;

echo "$numero1 subtrai $numero2 e sai $result";
echo"<br><hr>";

echo "<h1>Operador de multipliçao<h1> <br>";

$primeiroNumeroDigitado = 1000;
$segundoNumeroDigitado = 20;

$valorTotal = $primeiroNumeroDigitado * $segundoNumeroDigitado;

echo "$primeiroNumeroDigitado multiplicado por $segundoNumeroDigitado é igual $valorTotal";
echo"<br><hr>";

echo "<h1>Operador de divisao<h1> <br>";

$queijo = 100000;
$mortandela = 10;

$sanduiche = $mortandela / $queijo;

echo "se dividir $queijo e $mortandela o resultado é $sanduiche";
echo"<br><hr>"

?>