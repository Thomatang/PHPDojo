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

            if (ctype_lower($s) || ctype_upper($s)) {
                return $s;
            }

            $lowerDiff = similar_text($lowerCase, $s);
            $upperDiff = similar_text($upperCase, $s);

            if ($lowerDiff == $upperDiff) {
                $output = strtolower($s);
            } else {
                $output = $lowerDiff > $upperDiff ? strtolower($s) : strtoupper($s);
            }

            return $output;
        }
    }
}
