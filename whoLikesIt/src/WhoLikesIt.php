<?php

namespace App;

class WhoLikesIt
{

    /**
     * @param $names
     * @return string
     */
    function likes($names)
    {
        if (empty($names))
            return "no one likes this";

        if (sizeof($names) == 1) {
            $output = $names[0] . " likes this";
        } elseif (sizeof($names) == 2) {
            $output = $names[0] . " and " . $names[1] . " like this";
        } elseif(sizeof($names) == 3) {
            $output = $names[0];
            foreach (array_slice($names, 1) as $name) {
                if ($name == end($names)) {
                    $output .= " and " . $name;
                    break;
                }
                $output .= ", " . $name;
            }
            $output .= " like this";
        } else {
            $output = $names[0] . ", " . $names[1] . " and " . (sizeof($names)-2) . " others like this";
        }
        return $output;
    }
}