<?php
class Solution
{
    /*
     * Time Complexity: O(m * n) - donde m es el número de clientes y n la cantidad de cuentas
     * Space Complexity: O(m) - se guarda la riqueza de cada cliente en un array auxiliar
     *
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts)
    {
        $aux = [];

        for ($i = 0; $i < count($accounts); $i++) {
            $clientWealth = 0;
            for ($j = 0; $j < count($accounts[$i]); $j++) {
                $clientWealth += $accounts[$i][$j];
            }
            $aux[$i] = $clientWealth;
        }

        return max($aux);
    }
}
?>