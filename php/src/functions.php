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
        if (is_numeric($numero) && $numero % 2 == 0){
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
    // return implode(' ', $paraules)  paara ahorrarme el codigo de arriba
    // tambien utilizar join si es array
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

function peseta2euros(float $quantitat, $conticacio = 166){
    return round($quantitat / $conticacio);
}
function euro2pesetes(float $quantitat, $conticacio = 166){
    return round($quantitat * $conticacio);
}

function desplacament(string  $cadena, int $des){
    if ($des < 0){
        return 'El desplaçament no pot ser negatiu';
    }
    $abecedario = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
    $resultado = '';
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = strtoupper($cadena[$i]);
        if(ctype_alpha($caracter)){
            $indice = strpos($abecedario,$caracter);
            $indiceNuevo = ($indice + $des) % 26;
            $nuevaLetra = $abecedario[$indiceNuevo];
            $resultado .= $nuevaLetra;
        }else{
            $resultado .= $caracter;
        }
    }
    return  $resultado;
}
function fecha_inglesa($date){
    $fechaPartida = explode('.',$date);
    return $fechaPartida[2] . '/' . $fechaPartida[1] . '/' . $fechaPartida[0];
}

function vell($array){
    $fechaMasVieja = null;
    $llaveFechaMasVieja = null;

    foreach ($array as $llave => $fecha){
        $fechaIngles = fecha_inglesa($fecha);
        $fechaConvertida = strtotime($fechaIngles);
        if($fechaConvertida < $fechaMasVieja || $fechaMasVieja === null){
            $fechaMasVieja = $fechaConvertida;
            $llaveFechaMasVieja = $llave;
        }
    }
    return $llaveFechaMasVieja;
}

function laureado($array){
    $vecesRepetidas = array_count_values($array);
    arsort($vecesRepetidas);
    $masRepetido = reset($vecesRepetidas);
    $valorMasRepetido = array_keys($vecesRepetidas,$masRepetido);
    return$valorMasRepetido[0];
}

function any($fecha){
    $fechaPartida = explode('.',$fecha);
    return $fechaPartida[2];
}

function jove($nacimientos, $fechas){
    $atletaMasJoven = null;
    $menorDiferencia = null;
    $atletasMasJovenArray = [];
    foreach ($nacimientos as $indice => $natalici){
        $fecha = $fechas[$indice];
        $anyoRecord = any($fecha);
        $diferencia = $anyoRecord - intval($natalici);
        if ($diferencia < $menorDiferencia || $menorDiferencia === null){
            $menorDiferencia = $diferencia;
            $atletaMasJoven = $indice;
        }
    }
    $atletasMasJovenArray = [$atletaMasJoven,$menorDiferencia];
    return $atletasMasJovenArray;
}
function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}