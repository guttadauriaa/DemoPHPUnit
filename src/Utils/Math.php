<?php

namespace Guttadauria\Utils;

class Math
{

    public static function double($nombre) {
        return $nombre * 2;
    }

    public static function carre($nombre) {
        return $nombre * $nombre;
    }

    public static function puissance($base, $exposant) {
        return pow($base, $exposant);
    }
}