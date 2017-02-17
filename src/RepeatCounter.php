<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase)
        {
            $count = 0;
            $user_word = strtolower($user_word);
            $user_phrase = strtolower($user_phrase);
            
            if ($user_word === $user_phrase)
            {
                ++$count;
            }

            return $count;
        }
    }
?>
