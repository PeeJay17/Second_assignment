<?php 

function isPalindrome($s) {
    // Remove non-alphanumeric characters and convert to lowercase
    $s = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $s));
    
    // Compare the string with its reverse
    return $s === strrev($s);
}

// Example usage:
$s = "A man, a plan, a canal: Panama";
if (isPalindrome($s)) {
    echo "The string '$s' is a palindrome.";
} else {
    echo "The string '$s' is not a palindrome.";
}

?>