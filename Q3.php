<?php 

function twoSum($nums, $target) {
    $indices = [];
    
    // Iterate through the array
    foreach ($nums as $index => $num) {
        // Calculate the complement of the current number
        $complement = $target - $num;
        
        // Check if the complement exists in the indices array
        if (isset($indices[$complement])) {
            // If found, return the indices of the two numbers
            return [$indices[$complement], $index];
        }
        
        // Store the current number's index in the indices array
        $indices[$num] = $index;
    }
    
    // If no such pair is found, return an empty array
    return [];
}

// Example usage:
$nums = [2, 7, 11, 15];
$target = 9;
$result = twoSum($nums, $target);
echo "[" . $result[0] . ", " . $result[1] . "]";  // Output: [0, 1]

?>