<?php namespace Darumen\Sandbox;

class Sandbox
{
    public function returnOriginalString(string $string = '') : string
    {
        return $string;
    }

    public function returnLowerString(string $string = '') : string
    {
        return mb_strtolower($string);
    }

    public function returnUpperString(string $string = '') : string
    {
        return mb_strtoupper($string);
    }
}
