<?php

namespace BrainGames\Games\Gcd;

function gcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) $a = $a - $b;
        else $b = $b - $a;
    }
    return $b;
}

function getData()
{
    $data = [
        'instruction' => 'Find the greatest common divisor of given numbers.',
    ];

    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);

        $rightAnswer = gcd($number1, $number2);

        $data['questions'][] = "${number1} ${number2}";
        $data['rightAnswers'][] = (string) $rightAnswer;
    }

    return $data;
}
