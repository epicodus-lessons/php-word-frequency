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
            
            if (str_word_count($user_phrase) > 1)
            {
                $word_list = explode(' ', $user_phrase);
                foreach ($word_list as $word) {
                    if ($user_word === $word) {
                        ++$count;
                    }
                }
            }

            return $count;
        }
    }
?>
