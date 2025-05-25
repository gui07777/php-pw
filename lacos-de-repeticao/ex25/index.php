<form method="post">
Idade (separem por vírgulas):<input type="text" name="idade" required>
<input type="submit" value="Enviar">
</form>

<?php 

if(isset($_POST['idade'])) {

$idade = $_POST['idade'];
$arrayidade = explode(',', $idade);

$soma = 0;
$quantidade = count($arrayidade);

for($i = 0; $i < $quantidade; $i++) {
    $idade = intval(str_replace(',','.', trim($arrayidade[$i])));
    $soma = $soma + $idade;
}

if($quantidade > 0) {
    $media = $soma / $quantidade;
    echo "<h3> media: $media</h3> ";
    while($media < 26) {
        echo"Varia entre 0 e 25 anos, Jovem";
        break;
    }
    while($media > 25 && $media < 61) {
        echo "Varia entre 26 e 60 anos. Adulta";
        break;
    }
    while($media > 60) {
        echo "Acima de 60 anos, Idosa";
        break;
    }
}else{
    echo"nenhuma idade válida foi informada";
}

}



?>