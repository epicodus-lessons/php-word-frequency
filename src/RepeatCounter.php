<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase)
        {
            $count = 0;
            $user_word = strtolower($user_word);
            $user_phrase = str_word_count(strtolower($user_phrase), 1);

            foreach ($user_phrase as $word) {

                if ($user_word === $word)
                {
                  ++$count;
                }
            }

            return $count;
        }
    }
?>
