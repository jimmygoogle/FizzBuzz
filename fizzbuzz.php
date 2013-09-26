<?php

        foreach (range(0, 100) as $number)
        {
                $output = '';

                if(($number % 3 == 0) && ($number % 5 == 0))
                {
                        $output = 'FizzBuzz';
                }

                elseif($number % 3 == 0)
                {
                        $output = 'Fizz';
                }

                elseif($number % 5 == 0)
                {
                        $output = 'Buzz';
                }

                else
                {
                        $output = $number;
                }


                print "$output\n";
        }
?>
