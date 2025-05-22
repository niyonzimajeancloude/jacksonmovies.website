
// Define the upper limit
$upperLimit = 17;

// Initialize the sum variable
$sum = 0;

// Loop through numbers from 1 to the upper limit
for ($i = 1; $i <= $upperLimit; $i++) {
    // Check if the number is odd
    if ($i % 2 != 0) {
        // Add the odd number to the sum
        $sum += $i;
    }
}

// Display the result
echo "The sum of odd numbers from 1 to $upperLimit is: $sum";
?>
