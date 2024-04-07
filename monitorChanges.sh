#!/bin/bash

# Directory to monitor
dir_to_monitor="changes"

# Function to delete files in the directory
delete_files() {
    if [ "$(ls -A $dir_to_monitor)" ]; then
        echo "Deleting files in $dir_to_monitor..."
        rm -rf $dir_to_monitor/*
    fi
}

# Function to fetch and pull changes from remote repository
fetch_and_pull() {
    echo "Fetching changes from remote repository..."
    git fetch

    echo "Pulling changes from remote repository..."
    git pull
}

# Function to delete the directory
delete_directory() {
    echo "Deleting directory '$dir_to_monitor'..."
    rm -rf $dir_to_monitor
}

# Monitor changes in the directory
while true; do
    if [ -d "$dir_to_monitor" ]; then
        delete_files
        fetch_and_pull
        delete_directory
        break  # Exit the loop after deleting the directory
    else
        echo "Directory '$dir_to_monitor' does not exist."
    fi
    sleep 10  # Adjust the sleep duration as needed
done
