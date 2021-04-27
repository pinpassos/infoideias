<?php

function calculaArea($num) {
    if($num == 1) {
        return 1;
    } else {
        $vetor = array();
        $vetor[] = 1;
        for($i = 2; $i <= $num; $i++) {
            $vetor[] = (($i - 1) * 4) + $vetor[$i - 2];
        }
        return $vetor[$num - 1];
    }
}

?>