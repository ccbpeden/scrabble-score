<?php
    Class Scrabble
    {



        function scoreCalculator($input_string)
        {

            $array_of_scores = array(
                1 =>array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T"),
                2 =>array("D", "G"),
                3 =>array("B", "C", "M", "P"),
                4 =>array("F", "H", "V", "W", "Y"),
                5 =>array("K"),
                8 =>array("J", "X"),
                10 =>array("Q", "Z")
            );

            $score_total = 0;

            $input_array = str_split(strtoupper($input_string));
            foreach ($input_array as $letter)
            {
                // outer loop: iterate over characters in input string
                foreach ($array_of_scores as $score => $letter_array)
                {
                    // inner loop: iterate over values of array_of_scores, search for input character, return key.
                    if(in_array($letter, $letter_array))
                    {
                        $score_total += $score;
                    }
                }
            }
            return $score_total;
        }
    }
?>
