<?php

$mediaAluno = 0;

if($mediaAluno >= 9){
    echo "Nota: MB";
}
else if($mediaAluno >= 7 && $mediaAluno <= 8){
    echo "Nota: B";
}
else if($mediaAluno >= 5 && $mediaAluno < 7){
    echo "Nota: R";
} else if($mediaAluno >= 0 && $mediaAluno < 5) {
    echo "Nota: I";
}else{
    echo "media invalida";
}

?>