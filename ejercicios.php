<?php

/* 1.Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva 
lista que contenga los mismos elementos en orden inverso. */

function listaInvertida($array) {
    return array_reverse($array);
}
$array = [1, 2, 3, 4, 5];
print_r(listaInvertida($array));

/* 2.Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros. */

function sumaPares($array) {
    $suma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}
$array = [1, 2, 3, 4, 5, 6];
echo sumaPares($array);

/* 3.Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre 
la frecuencia de cada carácter en la cadena. */

function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}
$cadena = "dos mil veinti cuatro";
print_r(frecuenciaCaracteres($cadena));

/* 4.Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide. */

function piramide($filas) {
    for ($i = 1; $i <= $filas; $i++) {
        echo str_repeat(" ", $filas - $i);
        echo str_repeat("*", 2 * $i - 1);
        echo "\n";
    }
}
piramide(5);

?>