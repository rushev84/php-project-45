<?php

namespace BrainGames\Run;

use function cli\line;
use function cli\prompt;

function runGame($data)
{
    line('Welcome to the Brain Games!');
//    $name = prompt('May I have your name?');
//    line("Hello, %s!", $name);

    line($data['instruction']);

//    print_r($data);

    foreach ($data['questionAndAnswers'] as $questionAndAnswer) {
        line("Question: ${questionAndAnswer[0]}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $questionAndAnswer[1]) {
            line("Correct!");
        } else {
            line("${userAnswer} is wrong answer ;(. Correct answer was ${questionAndAnswer[1]}.");
            break;
        }
    }

}
