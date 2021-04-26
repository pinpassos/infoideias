<?php

function palindromo($str) {
    $str = strtolower($str); // Para minúscula
    $str = str_replace(' ', '', $str); // Remove os espaços
    $str = preg_replace('/[^A-Za-z0-9\-]/', '', $str); // Remove os caractestes especiais
    $str_invertida = strrev($str); 
    
    if($str == $str_invertida || strlen($str) == 1) {
        echo 'true - É um palíndromo.';

    } else {
        echo 'false - Não é um palíndromo';
    }
}

echo palindromo('aabsaa');
?>