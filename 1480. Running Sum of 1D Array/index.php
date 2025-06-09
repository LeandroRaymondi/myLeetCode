<?php
class Solution
{
    /*
     * Running Sum of 1D Array
     * Time Complexity: O(n)
     * Space Complexity: O(n)
     *
     * @param Integer[] $nums
     * @return Integer[]
     */

    function runningSum($nums)
    {
        $arrayLength = count($nums);
        $output = [];
        $output[0] = $nums[0];

        for ($i = 1; $i < $arrayLength; $i++) {
            $output[$i] = $output[$i - 1] + $nums[$i];
        }

        return $output;
    }
}
?>