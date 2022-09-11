<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function mostFrequentEven($nums) {
        sort($nums);
        $count = 1;
        $result = 0;
        $output = -1;

        if (count($nums) == 1) {
            return $nums[0];
        }

        for($i = 0; $i < count($nums); $i++) {
            if($nums[$i] % 2 == 0) {
                if ($nums[$i] == $nums[$i + 1]) {
                    $count = $count + 1;
                } else {
                    $count = 1;
                }
               if ($count > $result) {
                    $result = $count;
                    $max[$nums[$i]] = $result;
                   $output = $nums[$i];
                }

            }
        }
      return $output;
    }
}
?>
