<?php
// Function to validate if the entered date is valid
function isValidDate($year, $month, $day) {
    return checkdate($month, $day, $year);
}

// Function to calculate the day of the week
function getDayOfWeek($year, $month, $day) {
    $timestamp = strtotime("$year-$month-$day");
    return date('l', $timestamp);
}

// Function to handle leap years
function isLeapYear($year) {
    return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
}

// Get user input for year, month, and day
$year = readline("Enter the year (YYYY): ");
$month = readline("Enter the month (MM): ");
$day = readline("Enter the day (DD): ");

// Validate the entered date
if (!isValidDate($year, $month, $day)) {
    echo "Error: Invalid date entered.\n";
    exit;
}

// Check if the year is a leap year
$leapYear = isLeapYear($year);

// Calculate the day of the week
$dayOfWeek = getDayOfWeek($year, $month, $day);

// Display the day of the week using a switch statement
switch ($dayOfWeek) {
    case 'Sunday':
        echo "The entered date is a Sunday.\n";
        break;
    case 'Monday':
        echo "The entered date is a Monday.\n";
        break;
    case 'Tuesday':
        echo "The entered date is a Tuesday.\n";
        break;
    case 'Wednesday':
        echo "The entered date is a Wednesday.\n";
        break;
    case 'Thursday':
        echo "The entered date is a Thursday.\n";
        break;
    case 'Friday':
        echo "The entered date is a Friday.\n";
        break;
    case 'Saturday':
        echo "The entered date is a Saturday.\n";
        break;
    default:
        echo "Error: Invalid day of the week.\n";
        break;
}
?>
