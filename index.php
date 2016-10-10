<?php
require 'vendor/autoload.php';


$number = new \demo\Number(2121111105012);

echo $number->say() . PHP_EOL;
echo $number->rebase(8)->say() . PHP_EOL;
