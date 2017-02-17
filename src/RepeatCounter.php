<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase)
        {
            $count = 0;
            if ($user_word === $user_phrase)
            {
                ++$count;
            }

            return $count;
        }
    }
?>
