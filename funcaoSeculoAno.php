<?php

function seculoAno($ano) {
    return ceil($ano / 100); // A função ceil arredonda para cima o valor do parâmetro
}

echo seculoAno(1700);

?>