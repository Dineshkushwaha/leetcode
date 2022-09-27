<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $n = count($nums);
        $zero = $n;

        for($i=0; $i < $n; $i++) {
            if ($nums[$i] == 0) {
                unset($nums[$i]);
                $nums[$zero] = 0;
                $zero++;
            }
        }

    }
}
?>
