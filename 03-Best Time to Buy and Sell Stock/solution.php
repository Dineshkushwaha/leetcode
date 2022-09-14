<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $n = count($prices);
        $profit_old = 0;
        $j = 0;
        for($i = 1; $i < $n; $i++) {
            $sell = $prices[$i];
            $buy = $prices[$j];
            $profit = $sell - $buy;
            if ($profit > $profit_old) {
                $profit_old = $profit;
            } elseif($profit < 0) {
                $j = $i;
            }
        }

        return $profit_old;
    }
}
?>
