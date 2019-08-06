<?php

namespace App {

    class EqualSideOfAnArray
    {
        /**
         * @return string
         */
        public function find_even_index($arr)
        {
            $sum = 0;
            $leftSum = 0;

            for ($i = 0; $i < sizeof($arr); $i++) {
                $sum += $arr[$i];
            }

            for ($i = 0; $i < sizeof($arr); $i++) {
                $sum -= $arr[$i];

                if ($leftSum == $sum) {
                    return $i;
                }

                $leftSum += $arr[$i];
            }
            return -1;
        }
    }
}