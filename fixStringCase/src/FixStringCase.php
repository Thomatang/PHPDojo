<?php

namespace App {
    class FixStringCase
    {
        function solve($s)
        {
            $output = "";

            if (ctype_lower($s) || ctype_upper($s)) {
                $output = $s;
            }

            return $output;
        }
    }
}
