<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function sumOfMultiples($n) {
        
        $res = 0;

        for ($i=1; $i <= $n; $i++)
        {
            if($i % 3 == 0 || $i % 5 == 0 || $i % 7 == 0) $res += $i;
        }

        return $res;
    }
}
?>