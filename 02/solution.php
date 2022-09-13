<?php
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $n = count($digits) - 1;
        for($i = $n; $i > -1; $i--) {
            $digits[$i] = $digits[$i] + 1;
            if ($digits[$i] > 9) {
                $digits[$i] = 0;
                if($i == 0) {
                    array_unshift($digits, 1);
                    break;
                }
            } else {
                return $digits;
            }
        }
        return $digits;
    }
}
?>
