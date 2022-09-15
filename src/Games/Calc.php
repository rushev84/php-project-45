<?php

namespace BrainGames\Games\Calc;

function getData(): array
{
    $data = [
        'instruction' => 'What is the result of the expression?',
    ];

    $operations = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $operation = $operations[rand(0, 2)];

        $rightAnswer = 0;

        if ($operation === '+') {
            $rightAnswer = $number1 + $number2;
        } elseif ($operation === '-') {
            $rightAnswer = $number1 - $number2;
        } else {
            $rightAnswer = $number1 * $number2;
        }

        $data['questions'][] = "${number1} ${operation} ${number2}";
        $data['rightAnswers'][] = (string) $rightAnswer;
    }

    return $data;
}
