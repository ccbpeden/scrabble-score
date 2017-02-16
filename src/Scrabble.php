<?php
    Class Scrabble
    {
        private $word;
        private $score_multiplier;
        private $letter_multipliers; //assume array
        private $word_score;

        function __construct($input_word, $input_score_multiplier, $input_letter_multipliers)
        {
            $this->word = $input_word;
            $this->score_multiplier = $input_score_multiplier;
            $this->letter_multipliers = $input_letter_multipliers;
            $this->word_score = $this->scoreCalculator();
        }

        function getWordScore()
        {
            return $this->word_score;
        }



        function scoreCalculator()
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

            $input_array = str_split(strtoupper($this->word));
            foreach ($input_array as $index => $letter)
            {
                // outer loop: iterate over characters in input string
                foreach ($array_of_scores as $score => $letter_array)
                {
                    // inner loop: iterate over values of array_of_scores, search for input character, return key.
                    if(in_array($letter, $letter_array))
                    {
                        $score_total += $score * $this->letter_multipliers[$index];
                    }
                }
            }
            return ($score_total * $this->score_multiplier);
        }
    }
?>
