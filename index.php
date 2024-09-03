<?php

echo "Enter first number:" . PHP_EOL;
$number1 = trim(fgets(STDIN));
echo "Enter second number:" . PHP_EOL;
$number2 = trim(fgets(STDIN));

if (!is_numeric($number1) || !is_numeric($number2)) {
    fwrite(STDERR, "Введите, пожалуйста, число" . PHP_EOL);
} else {
    $number1 = (int)$number1;
    $number2 = (int)$number2;
    if ($number2 === 0) {
        fwrite(STDERR, "Делить на 0 нельзя" . PHP_EOL);
    } else {
        fwrite(STDOUT, "Total: " . ($number1 / $number2) . PHP_EOL);
    }
};

