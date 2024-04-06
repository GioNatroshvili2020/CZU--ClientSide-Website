<?php

// Change directory to the directory of the script
chdir(__DIR__);

// Execute git fetch
$output = [];
$fetchResult = exec('git fetch', $output, $fetchStatus);

// Output fetch result
echo "Git Fetch Result:\n";
echo implode("\n", $output) . "\n";
echo "Fetch Status: $fetchStatus\n";

// Execute git pull
$output = [];
$pullResult = exec('git pull', $output, $pullStatus);

// Output pull result
echo "\nGit Pull Result:\n";
echo implode("\n", $output) . "\n";
echo "Pull Status: $pullStatus\n";