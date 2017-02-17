<?php
    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_noWordInPhrase()
        {
            //arrange
            $wordPhrase = new RepeatCounter;
            $input_word = "a";
            $input_phrase = "the";

            //act
            $results = $wordPhrase->countRepeats($input_word, $input_phrase);

            //assert
            $this->assertEquals("0", $results);
        }
    }
 ?>
