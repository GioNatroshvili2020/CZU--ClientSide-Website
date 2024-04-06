<?php

// Command to run the gitSync.sh script
$command = 'bash gitSync.sh';

// Execute the command and capture output
$output = [];
$status = null;
exec($command, $output, $status);

// Output the result
echo "Command: $command\n";
echo "Output:\n";
foreach ($output as $line) {
    echo $line . "\n";
}
echo "Status: $status\n";