<?php

class ServerFunction
{
    public static function generateAdj()
    {
            // Initialize an empty data array.
        $adjectives = ['Kind', 'Genuine', 'Energetic', 'Carefree', 'Optimisitic', 'Perky', 'Respectful', 'Quiet', 'Direct', 'Thorough'];   
        $random = array_rand($adjectives, 1);
        return $adjectives[$random];
    

    }
    public static function generateNoun()
    {
        $nouns = ['Claire', 'George', 'Bill', 'Sarah', 'Sophie', 'Jose', 'Moe', 'Jessie', 'Carl', 'Mary'];
        $random_noun = array_rand($nouns, 1);
        return $nouns[$random_noun];
    }

    public static function generateName()
    {
        return self::generateAdj() . " " . self::generateNoun();
    }
}