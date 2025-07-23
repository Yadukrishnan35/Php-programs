<?php
// 1. count() - Counts elements in an array
// Example: count(['carrot', 'potato']) returns 2

// 2. empty() - Checks if an array is empty (returns true if array has no elements)
// Example: empty([]) returns true

// 3. in_array() - Checks if a value exists in an array
// Example: in_array('carrot', ['carrot', 'potato']) returns true

// 4. sort() - Sorts an indexed array in ascending order (modifies the original array)
// Example: sort([3, 1, 2]) results in [1, 2, 3]

// 5. array_reverse() - Returns a new array with elements in reverse order
// Example: array_reverse([1, 2, 3]) returns [3, 2, 1]

// 6. array_merge() - Merges two or more arrays into one
// Example: array_merge(['a'], ['b']) returns ['a', 'b']

// 7. max() - Returns the highest value in an array
// Example: max([10, 20]) returns 20

// 8. min() - Returns the lowest value in an array
// Example: min([10, 20]) returns 10

// 9. array_filter() - Filters elements based on a callback function
// Example: array_filter([10, 15], fn($n) => $n > 10) returns [15]

// 10. array_map() - Applies a function to all elements in an array
// Example: array_map(fn($n) => $n * 2, [1, 2]) returns [2, 4]

// 11. array_reduce() - Reduces an array to a single value using a callback
// Example: array_reduce([1, 2, 3], fn($carry, $n) => $carry + $n, 0) returns 6

// 12. array_slice() - Extracts a portion of an array
// Example: array_slice([1, 2, 3, 4], 1, 2) returns [2, 3]

// 13. array_splice() - Removes/replaces elements in an array
// Example: array_splice([1,2,3], 1, 1, [99]) results in [1,99,3]

// 14. array_chunk() - Splits an array into chunks
// Example: array_chunk([1, 2, 3, 4], 2) returns [[1,2],[3,4]]

// 15. array_count_values() - Counts occurrences of values in an array
// Example: array_count_values([1, 1, 2]) returns [1 => 2, 2 => 1]

// 16. array_key_exists() - Checks if a key exists in an array
// Example: array_key_exists('name', ['name' => 'John']) returns true

// 17. array_keys() - Returns all the keys of an array
// Example: array_keys(['a' => 1, 'b' => 2]) returns ['a', 'b']

// 18. array_values() - Returns all the values of an array
// Example: array_values(['a' => 1, 'b' => 2]) returns [1, 2]

// 19. array_combine() - Combines two arrays into an associative array
// Example: array_combine(['a', 'b'], [1, 2]) returns ['a' => 1, 'b' => 2]

// 20. usort() - Sorts an array using a user-defined comparison function
// Example: usort($arr, fn($a, $b) => $a - $b) sorts numerically

// 21. ksort() - Sorts an associative array by key (ascending)
// Example: ksort(['b' => 2, 'a' => 1]) results in ['a' => 1, 'b' => 2]

// 22. asort() - Sorts an associative array by value (ascending), maintaining key association
// Example: asort(['a' => 2, 'b' => 1]) results in ['b' => 1, 'a' => 2]

// 23. shuffle() - Randomly shuffles elements in an array (modifies the original array)
// Example: shuffle([1, 2, 3]) results in [2, 1, 3] (random)

// 24. array_rand() - Picks a random key from an array
// Example: array_rand([10, 20, 30]) might return 1

// 25. explode() - Splits a string by a delimiter into an array
// Example: explode(',', 'a,b,c') returns ['a', 'b', 'c']

// 26. implode() - Joins array elements into a string using a delimiter
// Example: implode('-', ['a', 'b', 'c']) returns 'a-b-c'

// 27. json_encode() - Converts a PHP array/object to a JSON string
// Example: json_encode(['name' => 'John']) returns '{"name":"John"}'

// 28. json_decode() - Converts a JSON string into a PHP array/object
// Example: json_decode('{"name":"John"}', true) returns ['name' => 'John']

// 29. array_keys() !== range(0, count($array) - 1)
// Used to check if an array is associative
// If keys are not 0-based indexes in order, it's associative

// 30. array_values($array) === array_keys($array)
// Used to check if an array is sequential (index keys match values)

// 31. is_array($array[0])
// Used to check if first element is an array — helps detect multidimensional arrays

// 32. array_values($array) === $array
// Used to check if an array is a list (sequential numeric indexes)
?>
