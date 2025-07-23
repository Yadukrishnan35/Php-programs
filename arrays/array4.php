<?php
echo "=== 1. Count of an Array ===" . PHP_EOL;
$veg = ['carrot', 'potato', 'onion', 'tomato'];
echo "Count of vegetables: " . count($veg) . PHP_EOL;

echo PHP_EOL . "=== 2. Check if an Array is Empty ===" . PHP_EOL;
$fruits = [];
echo empty($fruits) ? "The fruits array is empty." . PHP_EOL : "The fruits array is not empty." . PHP_EOL;

echo PHP_EOL . "=== 3. Check if a Value Exists in an Array ===" . PHP_EOL;
$searchValue = 'carrot';
echo in_array($searchValue, $veg) ? "$searchValue is found." . PHP_EOL : "$searchValue is not found." . PHP_EOL;

echo PHP_EOL . "=== 4. Sort an Array ===" . PHP_EOL;
$arr = [9, 3, 7, 4];
sort($arr);
echo "Sorted array: " . implode(", ", $arr) . PHP_EOL;

echo PHP_EOL . "=== 5. Reverse an Array ===" . PHP_EOL;
$reversedArr = array_reverse($arr);
echo "Reversed array: " . implode(", ", $reversedArr) . PHP_EOL;

echo PHP_EOL . "=== 6. Merge Two Arrays ===" . PHP_EOL;
$array1 = ['apple', 'banana'];
$array2 = ['orange', 'grape'];
$mergedArray = array_merge($array1, $array2);
echo "Merged array: " . implode(", ", $mergedArray) . PHP_EOL;

echo PHP_EOL . "=== 7. Max and Min in Array ===" . PHP_EOL;
$numbers = [5, 10, 15, 20];
echo "Max: " . max($numbers) . PHP_EOL;
echo "Min: " . min($numbers) . PHP_EOL;

echo PHP_EOL . "=== 8. Filter an Array (>10) ===" . PHP_EOL;
$filtered = array_filter($numbers, fn($n) => $n > 10);
echo implode(", ", $filtered) . PHP_EOL;

echo PHP_EOL . "=== 9. Map an Array (*2) ===" . PHP_EOL;
$mapped = array_map(fn($n) => $n * 2, $numbers);
echo implode(", ", $mapped) . PHP_EOL;

echo PHP_EOL . "=== 10. Reduce an Array (Sum) ===" . PHP_EOL;
$sum = array_reduce($numbers, fn($carry, $n) => $carry + $n, 0);
echo "Sum: $sum" . PHP_EOL;

echo PHP_EOL . "=== 11. Slice an Array ===" . PHP_EOL;
$sliced = array_slice($numbers, 1, 2);
echo implode(", ", $sliced) . PHP_EOL;

echo PHP_EOL . "=== 12. Splice an Array ===" . PHP_EOL;
$spliced = $numbers;
array_splice($spliced, 1, 2, [100, 200]);
echo implode(", ", $spliced) . PHP_EOL;

echo PHP_EOL . "=== 13. Chunk an Array ===" . PHP_EOL;
$chunks = array_chunk($numbers, 2);
foreach ($chunks as $chunk) {
    echo "Chunk: " . implode(", ", $chunk) . PHP_EOL;
}

echo PHP_EOL . "=== 14. Count Values in an Array ===" . PHP_EOL;
$counts = array_count_values($numbers);
foreach ($counts as $val => $count) {
    echo "Value $val occurs $count times" . PHP_EOL;
}

echo PHP_EOL . "=== 15. Print Student Marks ===" . PHP_EOL;
$students = [
    ["name" => "john", "marks" => 90],
    ["name" => "Ram", "marks" => 70],
    ["name" => "sanal", "marks" => 70]
];
foreach ($students as $s) {
    echo $s["name"] . " has marks " . $s["marks"] . PHP_EOL;
}

echo PHP_EOL . "=== 16. Check if Key Exists ===" . PHP_EOL;
echo array_key_exists("name", $students[0]) ? "Key exists." . PHP_EOL : "Key doesn't exist." . PHP_EOL;

echo PHP_EOL . "=== 17. Get Keys and Values ===" . PHP_EOL;
echo "Keys: " . implode(", ", array_keys($students[0])) . PHP_EOL;
echo "Values: " . implode(", ", array_values($students[0])) . PHP_EOL;

echo PHP_EOL . "=== 18. Combine Arrays ===" . PHP_EOL;
$names = ["Alice", "Bob", "Charlie"];
$marks = [85, 90, 95];
$combined = array_combine($names, $marks);
foreach ($combined as $n => $m) {
    echo "$n has marks $m" . PHP_EOL;
}

echo PHP_EOL . "=== 19. Flatten Multi-Dimensional Array ===" . PHP_EOL;
$flattened = array_map(fn($s) => $s["name"] . " has marks " . $s["marks"], $students);
echo implode(", ", $flattened) . PHP_EOL;

echo PHP_EOL . "=== 20. Sort Students by Marks ===" . PHP_EOL;
usort($students, fn($a, $b) => $a["marks"] <=> $b["marks"]);
foreach ($students as $s) {
    echo $s["name"] . ": " . $s["marks"] . PHP_EOL;
}

echo PHP_EOL . "=== 21. Sort Assoc Array by Key ===" . PHP_EOL;
$assoc = ["name" => "Alice", "age" => 25, "city" => "New York"];
ksort($assoc);
foreach ($assoc as $k => $v) {
    echo "$k: $v" . PHP_EOL;
}

echo PHP_EOL . "=== 22. Sort Assoc Array by Value ===" . PHP_EOL;
asort($assoc);
foreach ($assoc as $k => $v) {
    echo "$k: $v" . PHP_EOL;
}

echo PHP_EOL . "=== 23. Shuffle an Array ===" . PHP_EOL;
$shuffle = [1, 2, 3, 4, 5];
shuffle($shuffle);
echo "Shuffled: " . implode(", ", $shuffle) . PHP_EOL;

echo PHP_EOL . "=== 24. Random Pick ===" . PHP_EOL;
echo "Random pick: " . $shuffle[array_rand($shuffle)] . PHP_EOL;

echo PHP_EOL . "=== 25. Explode String into Array ===" . PHP_EOL;
$string = "apple,banana,orange";
$arrayFromStr = explode(",", $string);
echo implode(", ", $arrayFromStr) . PHP_EOL;

echo PHP_EOL . "=== 26. Implode Array into String ===" . PHP_EOL;
echo implode(" - ", $arrayFromStr) . PHP_EOL;

echo PHP_EOL . "=== 27. Convert Array to JSON ===" . PHP_EOL;
$json = json_encode($students);
echo $json . PHP_EOL;

echo PHP_EOL . "=== 28. Convert JSON to Array ===" . PHP_EOL;
$arrFromJson = json_decode($json, true);
foreach ($arrFromJson as $s) {
    echo $s["name"] . " has marks " . $s["marks"] . PHP_EOL;
}

echo PHP_EOL . "=== 29. Is Array Associative? ===" . PHP_EOL;
$isAssoc = array_keys($assoc) !== range(0, count($assoc) - 1);
echo $isAssoc ? "Yes, associative." . PHP_EOL : "No, not associative." . PHP_EOL;

echo PHP_EOL . "=== 30. Is Array Sequential? ===" . PHP_EOL;
echo array_values($assoc) === array_keys($assoc) ? "Sequential" . PHP_EOL : "Not Sequential" . PHP_EOL;

echo PHP_EOL . "=== 31. Is Array Multidimensional? ===" . PHP_EOL;
$multi = [
    ["name" => "Alice", "marks" => 85],
    ["name" => "Bob", "marks" => 90]
];
echo is_array($multi[0]) ? "Yes, multidimensional" . PHP_EOL : "No" . PHP_EOL;

echo PHP_EOL . "=== 32. Is Array a List? ===" . PHP_EOL;
echo array_values($veg) === $veg ? "Yes, it's a list." . PHP_EOL : "No, not a list." . PHP_EOL;
?>
