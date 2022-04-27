<?php

namespace Hexlet\Code\Brain\Even;

use function cli\line;
use function cli\prompt;

function gameBrainEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $i = 1;

    do {
        $questNum = random_int(1, 100);
        line("Question: {$questNum}");
        $answer = prompt('Your answer: ');

        if ($questNum % 2 === 0) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }

        if ($questNum % 2 === 0 && $answer === 'yes') {
            line('Correct!');
        } elseif ($questNum % 2 <> 0 && $answer === 'no') {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            break;
        }

        $i++;
    } while ($i <= 3);

    if ($i === 4) {
        line("Congratulations, %s!", $name);
    }
}
