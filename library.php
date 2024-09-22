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

function &swapMaxMinInMatrix(array &$matrix): array
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
    return $matrix;
}

function calculateSumMatrix(array $array): array
{
    $result = array();

    foreach ($array as $row) {
        $sum = 0;
        foreach ($row as $num) {
            $sum += $num;
        }
        if ($sum === 0)
            continue;
        $result[] = $sum;
    }

    return $result;
}

function calculateProductMatrix(array $array): array
{
    $result = array();

    foreach ($array as $row) {
        if (count($row) < 1)
            continue;
        if (count($row) === 1) {
            $result[] = $row[0];
            continue;
        }
        $product = 1;
        foreach ($row as $num) {
            $product *= $num;
        }
        $result[] = $product;
    }

    return $result;
}

function binomialCoefficient(int $m, int $n): int
{
    if (($m == 0 && $n > 0) || ($m == $n && $n >= 0)) {
        return 1;
    }
    if ($m > $n && $n >= 0) {
        return 0;
    }

    return binomialCoefficient($m - 1, $n - 1) + binomialCoefficient($m, $n - 1);
}

function calculateBinomialCoefficients(int $M): array
{
    $coefficients = [];

    for ($i = 1; $i <= $M; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $coefficients[$i][$j] = binomialCoefficient($j, $i);
        }
    }

    return $coefficients;
}

function findCommonValues($arrays): array
{
    if (empty($arrays) || count($arrays) < 2)
        return [];

    $arrays = array_filter($arrays, function($element) {
        return is_array($element);
    });

    $commonValues = array_shift($arrays);

    foreach ($arrays as $array)
        $commonValues = array_intersect($commonValues, $array);

    return $commonValues;
}

function findMaxNumber($array): ?int
{
    if (empty($array))
        return null;
    return max($array);
}

function findLongestString($array): ?string
{
    if (empty($array))
        return null;

    $longestString = "";
    foreach ($array as $string) {
        if (strlen($string) > strlen($longestString))
            $longestString = $string;
    }

    return $longestString;
}

function findMaxValue($array)
{
    if (empty($array))
        return null;

    $isNumericArray = array_reduce($array, function($carry, $item) {
        return $carry && is_numeric($item);
    }, true);

    return $isNumericArray ? findMaxNumber($array) : findLongestString($array);
}

function sortMatrixByIndexSum(array &$matrix = []): void
{
    if (empty($matrix))
        return;

    $flattenedArray = [];
    foreach ($matrix as $rowIndex => $row) {
        foreach ($row as $colIndex => $value) {
            $indexSum = $rowIndex + $colIndex;
            $flattenedArray[] = ['value' => $value, 'indexSum' => $indexSum];
        }
    }

    usort($flattenedArray, function ($a, $b) {
        if ($a['indexSum'] === $b['indexSum'])
            return $a['value'] <=> $b['value'];
        return $a['indexSum'] <=> $b['indexSum'];
    });

    $index = 0;
    $rows = count($matrix);
    $cols = count($matrix[0]);

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $matrix[$i][$j] = $flattenedArray[$index]['value'];
            $index++;
        }
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

function outputResultBinomialCoefficients(int $m, int $numberOfTask, array $result)
{
    echo "<h1>Номер завдання: $numberOfTask</h1>";
    echo "<h2>Біноміальні коефіцієнти для M = $m.</h2>";

    if ($m <= 0) {
        echo "<h2>Значення для M має бути більше ніж 0!</h2>";
        return;
    }

    echo "<h2>Обчислені біноміальні коефіцієнти:</h2>";
    print_r($result);
}
?>
