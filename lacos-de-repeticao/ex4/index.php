<?php 

$populacaoPaisA = 80000;
$populacaoPaisB = 200000;
$porcentagemPaisA = (3/100) * $populacaoPaisA;


for ($i = $populacaoPaisA; $i < $populacaoPaisB;) {
    $porcentagemPaisA = (3/100) * $populacaoPaisA;
    $total = $populacaoPaisA + $porcentagemPaisA;
    $i++;
    echo"$total";
    break;
}

?>