<?php

declare(strict_types=1);

$bools = true;
$word = 'String';
$num = 1;
$dec = 1.2;

// echo $bools . '<br />';
// echo $word . '<br />';
// echo $num . '<br />';
// echo $dec . '<br />';

// echo gettype($bools) . '<br/>';
// echo var_dump($bools) . '<br/>';

// function sum(int $x, int $y)
// {
//     return $x + $y;
// }

// echo sum(4, 1) . '<br/>';

// $var_dum = var_dump($bools);

// $text = <<<TEXT
// line 1 $var_dum;
// line 2
// line 3
// TEXT;

$switch_case_var = 4;

switch ($switch_case_var) {
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    default:
        echo '<h2>not found</h2>';
};

echo '<br>' . $printStatus = match ($switch_case_var) {
    1 => 'one',
    2 => 'two',
    default => '<h1>not found</h1>'
};

// echo nl2br($text);
