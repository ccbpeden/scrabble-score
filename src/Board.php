<?php
    Class Board
    {
        function playValidator($word,$direction,$position)
        {
            // assume position input in form of array(x coord, ycoord)
            $length = strlen($word);
            if ($direction == "vertical")
            {
                if ($position[1]+$length < 15)
                {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($position[0]+$length < 15)
                {
                    return true;
                } else {
                    return false;
                }
            }
        }



    }
 ?>
