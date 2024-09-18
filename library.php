<?php
function &findMaxNegative(array &$array): ?int
{
    $null = null;

    $negativeNumbers = array_filter($array, function ($num) {
        return $num < 0;
    });

    if (!empty($negativeNumbers)) {
        $maxNegative = max($negativeNumbers);
        foreach ($array as &$num) {
            if ($num === $maxNegative)
                return $num;
        }
    }

    return $null;
}

function calculateAverage($array): float
{
    return array_sum($array) / count($array);
}

function &findFirstGreaterThanAverage(&$array): ?int
{
    $null = null;
    $average = calculateAverage($array);

    foreach ($array as &$element) {
        if ($element > $average)
            return $element;
    }
    return $null;
}

function isConsonant(string $char): bool
{
    $consonants = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
    return strpos($consonants, $char) !== false;
}

function &findFirstConsonant(array &$array): ?string
{
    $null = null;

    foreach ($array as &$char) {
        if (isConsonant($char))
            return $char;
    }

    return $null;
}

function isLatinLetter(string $char): bool
{
    return preg_match("/^[a-zA-Z]*$/", $char);
}

function &findLastNotLatinChar(array &$array): ?string
{
    $null = null;

    for ($i = count($array) - 1; $i >= 0; $i--) {
        if (!isLatinLetter($array[$i]))
            return $array[$i];
    }

    return $null;
}

function &findSecondMax(array &$array): ?int
{
    $null = null;
    if (count($array) < 2)
        return $null;

    $uniqueArray = array_unique($array);

    if (count($uniqueArray) < 2)
        return $null;

    rsort($uniqueArray);

    $secondMax = $uniqueArray[1];

    foreach ($array as &$num) {
        if ($num === $secondMax)
            return $num;
    }

    return $null;
}

function swapMaxMin(array &$array): void
{
    if (empty($array))
        return;

    $maxIndex = array_keys($array, max($array))[0];
    $minIndex = array_keys($array, min($array))[0];

    $temp = $array[$maxIndex];
    $array[$maxIndex] = $array[$minIndex];
    $array[$minIndex] = $temp;
}

function calculateProduct(array $array): float
{
    if (count($array) < 2)
        return 0;

    $result = 1;
    foreach ($array as $num) {
        $result *= $num;
    }
    return $result;
}

function calculateSum(array $array): float
{
    $result = 0;
    foreach ($array as $num) {
        $result += $num;
    }
    return $result;
}

function findFirstNegative(array $array): ?int
{
    foreach ($array as $num)
        if ($num < 0)
            return $num;
    return null;
}

function calculateSumUntilFirstNegative(array $array): int
{
    $result = 0;
    foreach ($array as $num) {
        if ($num < 0)
            return $result;
        else
            $result += $num;
    }
    return $result;
}

function calculateTwoMax(array $array): ?array
{
    if (count($array) < 2)
        return null;

    $firstMax = max($array);
    $firstMaxIndex = array_search($firstMax, $array);

    unset($array[$firstMaxIndex]);
    $secondMax = max($array);
    return [$firstMax, $secondMax];
}

function &swapMaxMinInMatrix(array &$matrix): void
{
    foreach ($matrix as &$row) {
        if (count($row) < 2)
            continue;

        $maxIndex = array_search(max($row), $row);
        $minIndex = array_search(min($row), $row);

        $temp = $row[$maxIndex];
        $row[$maxIndex] = $row[$minIndex];
        $row[$minIndex] = $temp;
    }
}

function outputResult(array $array, string $successMessage, string $notFoundMessage, int $numberOfTask, $result = null)
{
    echo "<h1>Номер завдання: $numberOfTask</h1>";
    echo "<h2>Початковий масив:</h2>";
    echo "<pre>" . ((count($array) === 0) ? "Масив порожній." : implode(", ", $array)) . "</pre>";

    if ($result !== null) {
        echo "<h3>$successMessage</h3>";
        if (is_array($result))
            echo "<pre>" . implode(", ", $result) . "</pre>";
        else
            echo "<p>$result</p>";
    } else
        echo "<h3>$notFoundMessage</h3>";
}

function outputResultMatrix(array $matrix, string $successMessage, string $notFoundMessage, int $numberOfTask, $result = null)
{
    echo "<h1>Номер завдання: $numberOfTask</h1>";
    echo "<h2>Початкова матриця:</h2>";
    $countElementsOfMatrix = 0;
    foreach ($matrix as $row) {
        $countElementsOfMatrix += count($row);
    }

    if ($countElementsOfMatrix === 0)
        echo "<pre>Матриця порожня.</pre>";
    else
        print_r($matrix);

    if ($result !== null) {
        echo "<h3>$successMessage</h3>";
        print_r($result);
    } else
        echo "<h3>$notFoundMessage</h3>";
}

?>

