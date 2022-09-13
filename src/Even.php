<?php

namespace BrainGames\Even;

function getData()
{
    $data = [
        'instruction' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'questionAndAnswers' => []
    ];

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $rightAnswer = $number % 2 === 0 ? 'yes' : 'no';
        $data['questionAndAnswers'][] = [$number, $rightAnswer];
    }

    return $data;
}
