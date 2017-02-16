<?php
    require_once __DIR__."/../src/Scrabble.php";

    Class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scoreCalculator()
        {
            $input = "cake";
            $new_scrabble = New Scrabble();

            $result = $new_scrabble->scoreCalculator($input);
            $this->assertEquals(10, $result);
        }
    }
?>
