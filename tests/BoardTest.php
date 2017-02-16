<?php
    require_once __DIR__."/../src/Board.php";

    Class BoardTest extends PHPUnit_Framework_TestCase
    {
        function test_playValidator()
        {
            $input_word = "cake";
            $input_direction = "vertical";
            $input_position = array(0,0);
            $newBoard = new Board($input_word, $input_position, $input_direction);

            $result = $newBoard->playValidator($input_word,$input_direction,$input_position);

            $this->assertEquals(true, $result);
        }

        


    }
?>
