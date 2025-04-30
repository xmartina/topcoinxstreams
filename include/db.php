<?php
// Define root directory and load .env
$RootDir = $_SERVER['DOCUMENT_ROOT'];
loadEnv($RootDir . '/.env');

function loadEnv($path) {
    if (!file_exists($path)) {
        die('.env file not found.');
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;

        list($name, $value) = explode('=', $line, 2);
        putenv(trim($name) . '=' . trim($value));
    }
}

// Get DB credentials from env
$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USERNAME');
$dbPass = getenv('DB_PASSWORD');
$dbName = getenv('DB_DATABASE');

// Connect to the database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
