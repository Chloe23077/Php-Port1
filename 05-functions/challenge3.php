<?php
/*
 * challenge-1
 */
$fahrenheitToCelsius = fn ($f) => ($f - 32) * 5 / 9;
$degToConvert = 68;
echo $degToConvert . '&degF' . $fahrenheitToCelsius($degToConvert) . '&degC';

/*
 *  challenge-2
 */
function printNameInUppercase($names) {
    foreach ($names as $name) {
        $uppercaseName = strtoupper($name);
        echo $uppercaseName . '<br>';
    }
}

$name = ['Alice', 'Bob', 'Charlie', 'David'];
printNameInUppercase($name);

/*
 * challenge-3
 */
$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord;

function findLongestWord($sentence) {
    $words = explode(' ', $sentence);
    $longestWord = '';

    foreach ($words as $word) {
        $word = trim($word);
        if (strlen($word) > strlen($longestWord) || $longestWord === '') {
            $longestWord = $word;
        }
    }
    return $longestWord;
}
