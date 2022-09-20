<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $y = $x;
        $revnum = 0;
        if ($x < 0) {
            return false;
        }

        if ($x == 1) {
            return true;
        }

        while($x > 1) {
          $rem = $x % 10;
          $revnum = $revnum * 10 + $rem;
          $x = $x/10;
        }


        if ($y == $revnum) {
            return true;
        } else {
            return false;
        }

    }
}
?>
