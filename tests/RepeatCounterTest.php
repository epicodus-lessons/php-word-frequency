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

        function test_countRepeats_noPartialMatch()
        {
            //arrange
            $wordPhrase = new RepeatCounter;
            $input_word = "the";
            $input_phrase = "theater";

            //act
            $results = $wordPhrase->countRepeats($input_word, $input_phrase);

            //assert
            $this->assertEquals("0", $results);
        }

        function test_countRepeats_oneLetterWordMatch()
        {
            //arrange
            $wordPhrase = new RepeatCounter;
            $input_word = "the";
            $input_phrase = "the";

            //act
            $results = $wordPhrase->countRepeats($input_word, $input_phrase);

            //assert
            $this->assertEquals("1", $results);
        }

        function test_countRepeats_caseInsensitiveMatch()
        {
            //arrange
            $wordPhrase = new RepeatCounter;
            $input_word = "tHe";
            $input_phrase = "The";

            //act
            $results = $wordPhrase->countRepeats($input_word, $input_phrase);

            //assert
            $this->assertEquals("1", $results);
        }

        function test_countRepeats_multipleWordMatch()
        {
            //arrange
            $wordPhrase = new RepeatCounter;
            $input_word = "the";
            $input_phrase = "The man went to the park";

            //act
            $results = $wordPhrase->countRepeats($input_word, $input_phrase);

            //assert
            $this->assertEquals("2", $results);
        }

        function test_countRepeats_withPunctuation()
        {
            //arrange
            $wordPhrase = new RepeatCounter;
            $input_word = "Hello";
            $input_phrase = "Hello there, hello, hello hello, there";

            //act
            $results = $wordPhrase->countRepeats($input_word, $input_phrase);

            //assert
            $this->assertEquals("4", $results);
        }
    }
 ?>
