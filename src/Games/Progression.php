<?php

namespace BrainGames\Games\Progression;

function getData()
{
    $data = [
        'instruction' => 'What number is missing in the progression?',
    ];

    for ($i = 0; $i < 3; $i++) {
        // Всю прогрессию можно так же сгенерировать с помощью range()
        $progression = [];
        $progressionLength = rand(5, 10);
        $firstMember = rand(0, 5);
        $step = rand(1, 5);

        $progression[] = $firstMember;

        for ($j = 1; $j < $progressionLength; $j++) {
            $progression[$j] = $progression[$j - 1] + $step;
        }

        $randMember = rand(3, $progressionLength - 1);

        $rightAnswer = $progression[$randMember];
        $progression[$randMember] = '..';

        $data['questions'][] = implode(' ', $progression);
        $data['rightAnswers'][] = (string)$rightAnswer;
    }

    return $data;
}
