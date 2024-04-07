<?php

// Directory where the script is located
$script_directory = dirname(__FILE__);

// Directory where the changes folder is located
$changes_directory = $script_directory . '/changes';

// Check if the changes directory exists, if not, create it
if (!is_dir($changes_directory)) {
    mkdir($changes_directory);
}

// Path to the file to be created
$file_path = $changes_directory . '/change.txt';

// Create an empty file if it doesn't exist
if (!file_exists($file_path)) {
    $file = fopen($file_path, 'w');
    fclose($file);
    echo " 'change.txt' created in the 'changes' folder.\n";
} else {
    echo "'change.txt' already exists in the 'changes' folder.\n";
}

?>
