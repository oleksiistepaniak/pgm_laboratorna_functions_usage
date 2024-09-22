<?php
include "library.php";

$array = [1, 2, 3, -1, -2, -3, -4, -5, 4, 5, 10, -10];
$arrayStrings = ["Oleksii", "Pavlo", "Evan", "Stefania", "Bluetooth", "I love you babe!"];
$matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$array1 = [1, 2, 3, 4, 5];
$array2 = [2, 3, 4, 5, 6, 7];
$array3 = [2, 5, 7, 8, 9];
$array4 = [2, 5, 10];
$matrixTwo = [$array1, $array2, $array3, $array4];
$matrixThree = [[9, 2, 8], [7, 5, 1], [3, 4, 6]];
$m = 5;
$arrayEmpty = [];
$matrixEmpty = [[], []];
$matrixOneElementInRow = [[1], [2]];
$arrayOneElement = [10];
$arrayTwoElements = [10, 20];
$copyArray = [...$array];
$copyMatrix = [...$matrix];
$copyMatrixThree = [...$matrixThree];
$arrayChars = ["a", "a", "a", "o", "o", "i", "z", "+", "i"];
$firstTaskSuccessMessage = "Максимум з негативних елементів:";
$firstTaskNotFoundMessage = "Негативних елементів не знайдено!";

$secondTaskSuccessMessage = "Перший елемент. що більший за середнє арифметичне:";
$secondTaskNotFoundMessage = "Елементів, що більші за середнє арифметичне не знайдено!";

$thirdTaskSuccessMessage = "Перший елемент, який в масиві є приголосною літерою:";
$thirdTaskNotFoundMessage = "В масиві немає приголосних літер!";

$fourTaskSuccessMessage = "Останній символ, що не є літерою латинського алфавіту:";
$fourTaskNotFoundMessage = "В масиві немає символів, що не є літерою латинського алфавіту!";

$fiveTaskSuccessMessage = "Другий максимум в масиві:";
$fiveTaskNotFoundMessage = "Немає другого максимума в масиві!";

$sixTaskSuccessMessage = "Змінені місцями максимум та мінімум масиву:";
$sixTaskNotFoundMessage = "Масив не містить жодних елементів!";

$sevenTaskMultNoElementsInArray = "Порожній масив (результат множення):";
$sevenTaskMultOneElementInArray = "Масив з одного елемента (результат множення):";
$sevenTaskMultTwoElementsInArray = "Масив з двох елементів (результат множення):";

$sevenTaskAddNoElementsInArray = "Порожній масив (результат додавання):";
$sevenTaskAddOneElementInArray = "Масив з одного елемента (результат додавання):";
$sevenTaskAddTwoElementsInArray = "Масив з двох елементів (результат додавання):";
$sevenTaskNotFoundMessage = "Відбулась помилка під час калькуляції додавання/множення";

$eightTaskNoElementsInArray = "Порожній масив (пошук першого негативного елементу):";
$eightTaskOneElementInArray = "Масив з одного елемента (пошук першого негативного елементу):";
$eightTaskManyElementsInArray = "Масив з багатьох елементів (пошук першого негативного елементу):";
$eightTaskNotFoundMessage = "Перший негативний елемент в масиві не було знайдено!";

$nineTaskNoElementsInArray = "Порожній масив (сума до першого негативного елемента):";
$nineTaskOneElementInArray = "Масив з одного елемента (сума до першого негативного елемента):";
$nineTaskManyElementsInArray = "Масив з багатьох елементів (сума до першого негативного елемента):";
$nineTaskNotFoundMessage = "Відбулась помилка під час калькуляції суми до першого негативного елемента!";

$tenTaskNoElementsInArray = "Порожній масив (знайти два максимума масиву):";
$tenTaskOneElementInArray = "Масив з одного елемента (знайти два максимума масиву):";
$tenTaskManyElementsInArray = "Масив з багатьох елементів (знайти два максимума масиву):";
$tenTaskNotFoundMessage = "Два максимума в масиві не було знайдено!";

$elevenTaskSuccessMessage = "Змінені місцями максимум та мінімум в рядках матриці:";
$elevenTaskNotFoundMessage = "Матриця не містить жодних рядків з двома і більше елементами!";

$twelveTaskMultNoElementsInMatrix = "Порожня матриця (результат множення):";
$twelveTaskMultOneElementInMatrix = "Матриця з рядками по одному елементу (результат множення):";
$twelveTaskMultManyElementsInMatrix = "Матриця з рядками з багатьма елементами (результат множення):";

$twelveTaskAddNoElementsInMatrix = "Порожня матриця (результат додавання):";
$twelveTaskAddOneElementInMatrix = "Матриця з рядками по одному елементу (результат додавання):";
$twelveTaskAddManyElementsInMatrix = "Матриця з рядками з багатьма елементами (результат додавання):";
$twelveTaskNotFoundMessage = "Відбулась помилка під час калькуляції додавання/множення";

$sixteenTaskSuccessMessage = "Однакові значення:";
$sixteenTaskNotFoundMessage = "Немає однакових значень серед масивів!";

$seventeenTaskSuccessMessageStrings = "Максимальне значення (у випадку масиву рядків):";
$seventeenTaskSuccessMessageNumbers = "Максимальне значення (у випадку масиву чисел):";
$seventeenTaskNotFoundMessage = "Найдовший рядок або найдовше число не було знайдено!";

$eighteenTaskSuccessMessage = "Посортована матриця:";
$eighteenTaskNotFoundMessage = "Відбулась помилка під час сортування матриці!";

$maxNegative = findMaxNegative($array);
$firstGreaterThanAverage = findFirstGreaterThanAverage($array);
$firstConsonant = findFirstConsonant($arrayChars);
$lastNotLatinChar = findLastNotLatinChar($arrayChars);
$secondMax = findSecondMax($array);
swapMaxMin($array);
$multNoElements = calculateProduct($arrayEmpty);
$multOneElement = calculateProduct($arrayOneElement);
$multTwoElement = calculateProduct($arrayTwoElements);
$addNoElements = calculateSum($arrayEmpty);
$addOneElement = calculateSum($arrayOneElement);
$addTwoElement = calculateSum($arrayTwoElements);
$firstNegativeNoElements = findFirstNegative($arrayEmpty);
$firstNegativeOneElement = findFirstNegative($arrayOneElement);
$firstNegativeManyElements = findFirstNegative($array);
$sumUntilFirstNegativeNoElements = calculateSumUntilFirstNegative($arrayEmpty);
$sumUntilFirstNegativeOneElement = calculateSumUntilFirstNegative($arrayOneElement);
$sumUntilFirstNegativeManyElements = calculateSumUntilFirstNegative($array);
$twoMaxNoElements = calculateTwoMax($arrayEmpty);
$twoMaxOneElement = calculateTwoMax($arrayOneElement);
$twoMaxManyElements = calculateTwoMax($array);
swapMaxMinInMatrix($matrix);
$multNoElementsMatrix = calculateProductMatrix($matrixEmpty);
$multOneElementMatrix = calculateProductMatrix($matrixOneElementInRow);
$multManyElementsMatrix = calculateProductMatrix($matrix);
$addNoElementsMatrix = calculateSumMatrix($matrixEmpty);
$addOneElementMatrix = calculateSumMatrix($matrixOneElementInRow);
$addManyElementsMatrix = calculateSumMatrix($matrix);
$binomialCoefficients = calculateBinomialCoefficients($m);
$commonValues = findCommonValues($matrixTwo);
$maxValueArrayOfNumbers = findMaxValue($array);
$maxValueArrayOfStrings = findMaxValue($arrayStrings);
sortMatrixByIndexSum($matrixThree);

outputResult($array, $firstTaskSuccessMessage, $firstTaskNotFoundMessage, 1, $maxNegative);
outputResult($array, $secondTaskSuccessMessage, $secondTaskNotFoundMessage, 2, $firstGreaterThanAverage);
outputResult($arrayChars, $thirdTaskSuccessMessage, $thirdTaskNotFoundMessage, 3, $firstConsonant);
outputResult($arrayChars, $fourTaskSuccessMessage, $fourTaskNotFoundMessage, 4, $lastNotLatinChar);
outputResult($array, $fiveTaskSuccessMessage, $fiveTaskNotFoundMessage, 5, $secondMax);
outputResult($copyArray, $sixTaskSuccessMessage, $sixTaskNotFoundMessage, 6, $array);
outputResult($arrayEmpty, $sevenTaskMultNoElementsInArray, $sevenTaskNotFoundMessage, 7, $multNoElements);
outputResult($arrayOneElement, $sevenTaskMultOneElementInArray, $sevenTaskNotFoundMessage, 7, $multOneElement);
outputResult($arrayTwoElements, $sevenTaskMultTwoElementsInArray, $sevenTaskNotFoundMessage, 7, $multTwoElement);
outputResult($arrayEmpty, $sevenTaskAddNoElementsInArray, $sevenTaskNotFoundMessage, 7, $addNoElements);
outputResult($arrayOneElement, $sevenTaskAddOneElementInArray, $sevenTaskNotFoundMessage, 7, $addOneElement);
outputResult($arrayTwoElements, $sevenTaskAddTwoElementsInArray, $sevenTaskNotFoundMessage, 7, $addTwoElement);
outputResult($arrayEmpty, $eightTaskNoElementsInArray, $eightTaskNotFoundMessage, 8, $firstNegativeNoElements);
outputResult($arrayOneElement, $eightTaskOneElementInArray, $eightTaskNotFoundMessage, 8, $firstNegativeOneElement);
outputResult($array, $eightTaskManyElementsInArray, $eightTaskNotFoundMessage, 8, $firstNegativeManyElements);
outputResult($arrayEmpty, $nineTaskNoElementsInArray, $nineTaskNotFoundMessage, 9, $sumUntilFirstNegativeNoElements);
outputResult($arrayOneElement, $nineTaskOneElementInArray, $nineTaskNotFoundMessage, 9, $sumUntilFirstNegativeOneElement);
outputResult($array, $nineTaskManyElementsInArray, $nineTaskNotFoundMessage, 9, $sumUntilFirstNegativeManyElements);
outputResult($arrayEmpty, $tenTaskNoElementsInArray, $tenTaskNotFoundMessage, 10, $twoMaxNoElements);
outputResult($arrayOneElement, $tenTaskOneElementInArray, $tenTaskNotFoundMessage, 10, $twoMaxOneElement);
outputResult($array, $tenTaskManyElementsInArray, $tenTaskNotFoundMessage, 10, $twoMaxManyElements);
outputResultMatrix($copyMatrix, $elevenTaskSuccessMessage, $elevenTaskNotFoundMessage, 11, $matrix);
outputResultMatrix($matrixEmpty, $twelveTaskMultNoElementsInMatrix, $twelveTaskNotFoundMessage, 12, $multNoElementsMatrix);
outputResultMatrix($matrixOneElementInRow, $twelveTaskMultOneElementInMatrix, $twelveTaskNotFoundMessage, 12, $multOneElementMatrix);
outputResultMatrix($matrix, $twelveTaskMultManyElementsInMatrix, $twelveTaskNotFoundMessage, 12, $multManyElementsMatrix);
outputResultMatrix($matrixEmpty, $twelveTaskAddNoElementsInMatrix, $twelveTaskNotFoundMessage, 12, $addNoElementsMatrix);
outputResultMatrix($matrixOneElementInRow, $twelveTaskAddOneElementInMatrix, $twelveTaskNotFoundMessage, 12, $addOneElementMatrix);
outputResultMatrix($matrix, $twelveTaskAddManyElementsInMatrix, $twelveTaskNotFoundMessage, 12, $addManyElementsMatrix);
outputResultBinomialCoefficients($m, 13, $binomialCoefficients);
outputResultMatrix($matrixTwo, $sixteenTaskSuccessMessage, $sixteenTaskNotFoundMessage, 16, $commonValues);
outputResult($array, $seventeenTaskSuccessMessageNumbers, $seventeenTaskNotFoundMessage, 17, $maxValueArrayOfNumbers);
outputResult($arrayStrings, $seventeenTaskSuccessMessageStrings, $seventeenTaskNotFoundMessage, 17, $maxValueArrayOfStrings);
outputResultMatrix($copyMatrixThree, $eighteenTaskSuccessMessage, $eighteenTaskNotFoundMessage, 18, $matrixThree);
?>