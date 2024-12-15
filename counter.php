<?php
// Path to the file that stores the hit count
$counterFile = 'counter.txt';

// Check if the file exists
if (!file_exists($counterFile)) {
    // If the file doesn't exist, create it and initialize the counter with 0
    file_put_contents($counterFile, '0');
}

// Read the current hit count from the file
$hits = (int) file_get_contents($counterFile);

// Increment the counter
$hits++;

// Save the updated count back to the file
file_put_contents($counterFile, $hits);
?>