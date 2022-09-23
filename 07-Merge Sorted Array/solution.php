<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $j = 0;
        $count = $m + $n;
        for($i = 0; $i < $count; $i++) {
            if ($i > ($m -1)) {
                $nums1[$i] = $nums2[$j];
                $j = $j + 1;
            }
        }
        sort($nums1);
    }
}
?>
