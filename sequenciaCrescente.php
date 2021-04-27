<?php

function sequenciaCrescente($array) {
    if(count($array) == 1) {
        return 'True 1';
    } else {
        $flag = 'False';
        for($i = 0; $i < count($array); $i++) {
            $temp = $array;
            unset($temp[$i]);
            $temp = array_values($temp);
            $temp1 = $temp;
            sort($temp1);
            if($temp == $temp1) {
                $flag = 'True';
                for($j = 0; $j < count($temp) - 1; $j++) {
                    if($temp[$j] == $temp[$j + 1]) {
                        $flag = 'False';
                    }
                }
               if($flag == 'True')
                return 'True';
            }
        } return $flag;
    }
}

?>