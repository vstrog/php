// Separate numbers ans letters
<?php

print_r(divide_sample('Israel48'));

function divide_sample($sample_number)
{
    preg_match("/([^\d]+)(\d+)/", $sample_number, $pieces);

    return [$pieces[1], $pieces[2]];
}