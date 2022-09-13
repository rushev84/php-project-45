<?php

namespace BrainGames\Run;

use function cli\line;
use function cli\prompt;

function runGame($data)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($data['instruction']);

    $questions = $data['questions'];
    $rightAnswers = $data['rightAnswers'];

    for ($i = 0; $i < count($questions); $i++) {
        line("Question: ${questions[$i]}");

        $userAnswer = prompt("Your answer");

        if ($userAnswer === $rightAnswers[$i]) {
            line("Correct!");
        } else {
            line("'${userAnswer}' is wrong answer ;(. Correct answer was '${rightAnswers[$i]}'.");
            line("Let's try again, ${name}!");
            break;
        }

        if ($i === count($questions) - 1) {
            line("Congratulations, ${name}!");
        }
    }

}
