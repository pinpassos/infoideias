<?php

function sequenciaCrescente($array) {
    if(count($array) == 1) {
        return True;
    } else {
        $flag = False;
        for($i = 0; $i <= count($array); $i++) {
            $temp = $array;
            unset($temp[$i]);
            for($j = 0; $j <= count($temp) - 1; $j++) {
                if($temp[$j] < $temp[$j + 1]) {
                    break;
                }
                $flag = True;
            }
        }
        return $flag;
    }
}

echo sequenciaCrescente([1, 3, 2, 1]);
echo '<br>';
echo '<br>';
echo sequenciaCrescente([1, 3, 2]);

?>