<?php

namespace BrainGames\Games\Prime;

function isPrime(int $num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function getData()
{
    $data = [
        'instruction' => 'Answer "yes" if given number is prime. Otherwise answer "no".',
    ];

    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        $rightAnswer = '';

        isPrime($num) ? $rightAnswer = 'yes' : $rightAnswer = 'no';

        $data['questions'][] = $num;
        $data['rightAnswers'][] = $rightAnswer;
    }

    return $data;
}
