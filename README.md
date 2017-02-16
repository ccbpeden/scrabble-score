# Scrabble Score Calculator

* Application to calculate a scrabble score given an input string.

#### February 15, 2017

#### By **Charles Peden & Zach Swanson**

## Description
  An app which takes an input from the user and outputs what that user might score in the game of Scrabble.

| Behavior | Input Example | Output Example |
|----------|---------------|----------------|
|Given a word input, program outputs appropriate score|"Cake"|10|
|Given a word input including a double word score, program outputs appropriate score|"Cake"|20|
|Given a word input including a triple word score, program outputs appropriate score|"Cake"|30|
|Given a word input including both a double and triple word score, program outputs appropriate score|"Cake"|60|
|Given a word input including some number of double letter scores, program outputs appropriate score|"Cake" "double letter score position 2"|11|
|Given a word input including some number of triple letter scores, program outputs appropriate score|"Cake" "triple letter score position 2"|12|
|Given a word input including some number of double and triple letter scores, and/or double or triple word scores, program outputs appropriate score|"Cake" "double letter score position 2 and double word score"|22|
|Given a starting position, direction, and word, program returns whether play is valid | "cake" "A1" "vertical" | "valid" |



## Setup/Installation Requirements

*  Clone github repository for places webpage
*  From your parent directory in terminal, run "$ composer install"
*  Run php server in terminal (from web directory) by typing "$ php -S localhost:8000"
*  in your browser type "localhost:8000"
*  Webpage will load.

## Known Bugs
_No known bugs exist._

## Technologies Used
* _HTML_
* _PHP_
* _TWIG_
* _SILEX_
* _Composer_


### License
*MIT

Copyright (c) 2017 Charles Peden & Zach Swanson All Rights Reserved.
