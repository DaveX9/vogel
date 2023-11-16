<?php
// Handle form submission and solve the transportation problem using Vogel's approximation method

$numSources = $_POST['numSources'];
$numDestinations = $_POST['numDestinations'];

// Extract supply and demand data from the form
$supply = [];
for ($i = 0; $i < $numSources; $i++) {
    $supply[] = $_POST['supply' . $i];
}

$demand = [];
for ($i = 0; $i < $numDestinations; $i++) {
    $demand[] = $_POST['demand' . $i];
}

// Extract transportation costs from the form
$costs = [];
for ($i = 0; $i < $numSources; $i++) {
    $costs[$i] = [];
    for ($j = 0; $j < $numDestinations; $j++) {
        $costs[$i][$j] = $_POST['cost' . $i . $j];
    }
}

// Implement Vogel's approximation method to solve the transportation problem
// ...

// Display the optimal solution
echo "Optimal Solution:";
// ...
