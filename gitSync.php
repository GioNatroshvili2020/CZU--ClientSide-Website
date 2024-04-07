<?php

// Directory where you want to create the folder
$directory = __DIR__ . '/pendingChanges';

// Check if the directory doesn't exist, then create it
if (!is_dir($directory)) {
    if (mkdir($directory)) {
        echo "pendingChanges created successfully.\n";
    } else {
        echo "Failed to create pendingChanges .\n";
    }
} else {
    echo "pendingChanges already exists.\n";
}

?>
