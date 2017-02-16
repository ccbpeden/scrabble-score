<?php
    Class Scrabble
    {



        function scoreCalculator($input_string)
        {

            $array_of_scores = array(
                (1)=>array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T"),
                (2)=>array("D", "G"),
                (3)=>array("B", "C", "M", "P"),
                (4)=>array("F", "H", "V", "W", "Y"),
                (5)=>array("K"),
                (8)=>array("J", "X"),
                (10)=>array("Q", "Z")
            );

            $input_array = str_split($input_string);
            // outer loop: iterate over characters in input string
            foreach $
            // inner loop: iterate over values of array_of_scores, search for input character, return key.
        }
    }
?>
