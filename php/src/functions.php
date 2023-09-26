<?php
function esParell(int $a) : bool{
    return $a % 2 == 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array{
    $arrayNumeros = [];
    for ($i = 0; $i < $tam; $i++) {
        $arrayNumeros[$i] = rand($min,$max);
    }
    return $arrayNumeros;
}

function countParells(array &$array) : int{
    $totalPrells = 0;
    foreach ($array as $numero){
        if ($numero % 2 == 0){
            $totalPrells ++;
        }
    }
    return $totalPrells;
}

function major(): int{
    $major = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        if(func_get_arg($i) > $major){
            $major = func_get_arg($i);
        }
    }
    return $major;
}

function concatenar(...$paraules) : string{
    $frase = '';
    foreach ($paraules as $paraula){
        $frase = $frase . $paraula . ' ';
    }
    $fraseFinal = substr($frase,0,strlen($frase)-1);
    return $fraseFinal;
}

function digits(int $num) : int{
    if($num < 0){
        $numero = substr($num,1,strlen($num));
        return strlen($numero);
    }else{
        return strlen($num);
    }
}

function digitsN(int $num, int $post) : int{
    if ($post > strlen($num)){
        return false;
    }
    return substr($num,$post-1,1);
}

function llevaDarrere(int $num, int $cant) : int{
    if ($cant > strlen($num)){
        return false;
    }
    return substr($num,0,strlen($num)-$cant);
}
function llevaDavant(int $num, int $cant) : int{
    if ($cant > strlen($num)){
        return false;
    }
    return substr($num,$cant,strlen($num));
}

function peseta2euros(int $quantitat, $conticacio = 166){
    return round($quantitat / $conticacio);
}
function euro2pesetes(int $quantitat, $conticacio = 166){
    return round($quantitat * $conticacio);
}