<?php
// PHP code to handle the hit counter logic

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Hit Counter</title>
    <style>
        /* CSS Style for the hit counter */
        .hit-counter {
            font-size: 24px;
            color: white;
            background-color: green;
            padding: 10px;
            border-radius: 5px;
            width: fit-content;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Welcome to My Website!</h1>
    <p>Here is a simple green hit counter below:</p>
    
    <!-- Display the current hit count -->
    <div id="counter" class="hit-counter">
        <?php echo "Hits: " . $hits; ?>
    </div>

</body>
</html>
