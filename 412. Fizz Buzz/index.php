<?php
class Solution
{

    /*
     * 412. Fizz Buzz
     * Time Complexity: O(n)
     * Space Complexity: O(n)
     * 
     * @param Integer $n
     * @return String[]
     */
    
    function fizzBuzz($n)
    {
        $output = [];

        for ($i = 1; $i <= $n; $i++) {
            $divisible3 = $i % 3 == 0;
            $divisible5 = $i % 5 == 0;

            if ($divisible3 && $divisible5) {
                $output[$i] = "FizzBuzz";
            } else if ($divisible3) {
                $output[$i] = "Fizz";
            } else if ($divisible5) {
                $output[$i] = "Buzz";
            } else {
                $output[$i] = strval($i);
            }
        }

        return $output;
    }
}
