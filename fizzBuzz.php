<?php

require_once './vendor/autoload.php';

$fizzBuzz = new \Klnjmm\FizzBuzz();

for($number = 1; $number <= 100; $number++) {
    echo $fizzBuzz->play($number).PHP_EOL;
}
