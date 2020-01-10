<?php 
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = 'Leonardo';
$idade = 27;

//var_dump($nome);
//var_dump($idade);



if($idade >= 6 && $idade <= 12){
    foreach ($categorias as $indice => $valor) {
        if($valor == 'infantil')
        
            echo "O nadador ".$nome." compete na categoria infantil";
        
        
    }
}else if($idade >= 13 && $idade <= 18){
    foreach ($categorias as $indice => $valor) {
        if($valor == 'adolescente'){
            echo "O nadador ".$nome." compete na categoria adolescente";
        } 
        
    }
}else if($idade >= 19 && $idade <=60){
    foreach ($categorias as $indice => $valor) {
        if($valor == 'adulto'){
            echo "O nadador ".$nome. " compete na categoria adulto";
        }
        
    }
}
else{
    foreach ($categorias as $indice => $valor) {
        if($valor == 'idoso'){
            echo "O nadador ".$nome. " compete na categoria idoso";
        }
        
    }
}




?>