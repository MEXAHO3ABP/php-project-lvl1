<?php

namespace Hexlet\Code\Games\Engine;

use function cli\line;
use function cli\prompt;

function engineGames(string $Quest, array $Questions)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($Quest);

    $countCorrectAnswers = 0;

    foreach ($Questions as $index => [$question, $correctAnswer]) {
        line("Question: {$question}");
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            break;
        }

        $countCorrectAnswers++;
    }

    if ($countCorrectAnswers === 3) {
        line("Congratulations, %s!", $name);
    }
}
