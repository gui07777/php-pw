<form method="post">
Número: <input type="number" name="valor">
<input type="submit" value="Enviar">
</form>

<?php 
if($_SERVER['REQUEST_METHOD'] === "POST") {

$valor = $_POST['valor'];
$resultado;
$i = 1;

while($i > 1) {
$i++;
$resultado = $valor/$i;
echo"$resultado";
}


}


?> 

<!-- mesmo que o 52 -->