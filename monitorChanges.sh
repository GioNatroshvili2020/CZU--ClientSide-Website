#!/bin/bash

# Directory to monitor
dir_to_monitor="changes"

# Function to delete files in the directory
delete_files() {
    if [ "$(ls -A $dir_to_monitor)" ]; then
        echo "Deleting files in $dir_to_monitor..."
        rm -f $dir_to_monitor/*
    fi
}

# Function to fetch and pull changes from remote repository
fetch_and_pull() {
    echo "Fetching changes from remote repository..."
    git fetch

    echo "Pulling changes from remote repository..."
    git pull
}

# Monitor changes in the directory
while true; do
    if [ -d "$dir_to_monitor" ]; then
        delete_files
        fetch_and_pull
    else
        echo "Directory '$dir_to_monitor' does not exist."
    fi
    sleep 1  # Adjust the sleep duration as needed
done
