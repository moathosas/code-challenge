<?php

class Hamming
{
    //to check if the string a and b have the same length
    private static function checkString($a, $b)
    {
        return strlen($a) == strlen($b);
    }

    // hamming code
    public static function checkHamming($a, $b)
    {
        $i = 0;
        $count = 0;
        // to check  if the string have the same length
        if (self::checkString($a, $b)) {
            while (isset($a[$i]) != '') {
                //check if the each element of the strings are the same or not and increment count by one if it not the same
                if ($a[$i] != $b[$i])
                    $count++;
                $i++;
            }
            //return number the hamming distance
            return $count;

        }
        else {
            echo ('the string must have the same length' );
        }
    }


}

class Levenshtein
{



    public static function checkLevenshtein($a, $b)
    {
        //initialize dynamic array to fill it with minimum number of distance between string
        $arr = array();
        //initialize array with zeros with length (size string a) and (size string b)
        for ($i = 0; $i < strlen($a); $i++) {
            $s = array();
            for ($j = 0; $j < strlen($b); $j++) {
                $s[$j] = 0;
            }
            $arr[$i] = $s;
        }
        // Apply levenshtein distance
        for ($i = 0; $i < strlen($a); $i++) {
            for ($j = 0; $j < strlen($b); $j++) {
                if ($i == 0 || $j == 0) {
                    if ($i == 0) $arr[$i][$j] = $j;
                    else if ($j == 0) $arr[$i][$j] = $i;
                    continue;
                }
                //check if the character are the same or not and compute the minimum cost to convert
                if ($a[$i] == $b[$j]) $arr[$i][$j] = $arr[$i - 1][$j - 1];

                else $arr[$i][$j] = min($arr[$i - 1][$j], $arr[$i][$j - 1], $arr[$i - 1][$j - 1]) + 1;
            }
        }
        //return the number of steps to be the same
        return $arr[strlen($a) - 1][strlen($b) - 1];
    }



}

