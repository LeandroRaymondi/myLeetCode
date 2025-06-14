<?php
class Solution
{

    /*
     * 1342. Number of Steps to Reduce a Number to Zero
     * Time Complexity: O(log n)
     * Space Complexity: O(1)
     * 
     * @param Integer $num
     * @return Integer
     */

    function numberOfSteps($num)
    {
        $steps = 0;

        while ($num > 0) {
            $steps++;
            if (($num % 2) == 0) {
                $num = $num / 2;
            } else {
                $num--;
            }
        }

        return $steps;
    }
}
