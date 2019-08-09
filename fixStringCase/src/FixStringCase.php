<?php

namespace App {
    class FixStringCase
    {
        /**
         * @param $s
         * @return string
         */
        function solve($s)
        {
            $lowerCase = strtolower($s);
            $upperCase = strtoupper($s);

            $lowerDiff = similar_text($s, $lowerCase);
            $upperDiff = similar_text($s, $upperCase);

            $output = $lowerDiff >= $upperDiff ? strtolower($s) : strtoupper($s);

            return $output;
        }
    }
}
