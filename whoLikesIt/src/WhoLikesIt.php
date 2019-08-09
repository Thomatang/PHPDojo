<?php

namespace App;

class WhoLikesIt
{

    function likes($names)
    {
        if (empty($names)) return "";

        $nameString = implode($names);

        return $nameString . " likes this.";
    }
}