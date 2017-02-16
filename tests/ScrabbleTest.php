<?php
    require_once __DIR__."/../src/Scrabble.php";

    Class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scoreCalculator()
        {
            $input_word = "cake";
            $input_score_multiplier = 1;
            $input_letter_multipliers = array (1,1,1,1);
            $new_scrabble = New Scrabble($input_word,$input_score_multiplier,$input_letter_multipliers);

            $result = $new_scrabble->getWordScore();
            $this->assertEquals(10, $result);
        }

        function test_scoreCalculatorDouble()
        {
            $input_word = "cake";
            $input_score_multiplier = 2;
            $input_letter_multipliers = array (1,1,1,1);
            $new_scrabble = New Scrabble($input_word,$input_score_multiplier,$input_letter_multipliers);

            $result = $new_scrabble->getWordScore();
            $this->assertEquals(20, $result);
        }
        function test_scoreCalculatorTriple()
        {
            $input_word = "cake";
            $input_score_multiplier = 3;
            $input_letter_multipliers = array (1,1,1,1);
            $new_scrabble = New Scrabble($input_word,$input_score_multiplier,$input_letter_multipliers);

            $result = $new_scrabble->getWordScore();
            $this->assertEquals(30, $result);
        }

        function test_scoreCalculatorLetterDouble()
        {
            $input_word = "cake";
            $input_score_multiplier = 1;
            $input_letter_multipliers = array (1,2,1,1);
            $new_scrabble = New Scrabble($input_word,$input_score_multiplier,$input_letter_multipliers);

            $result = $new_scrabble->getWordScore();
            $this->assertEquals(11, $result);
        }

        function test_scoreCalculatorFancy()
        {
            $input_word = "cake";
            $input_score_multiplier = 2;
            $input_letter_multipliers = array (1,1,3,1);
            $new_scrabble = New Scrabble($input_word,$input_score_multiplier,$input_letter_multipliers);

            $result = $new_scrabble->getWordScore();
            $this->assertEquals(40, $result);
        }






    }
?>
