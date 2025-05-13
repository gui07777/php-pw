<?php
$idade = 19;
$isCNH = true;
if ($idade >= 18 && $isCNH = true) {
    echo "maior de idade e pode dirigir";
}else if( $idade >= 18 && $isCNH = false) {
 
    echo "é maior de idade mas não pode dirigir";
}else{
    echo "é menor de idade e não tem cnh";
}
?>