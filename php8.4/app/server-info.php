<?php
/**
 * Server Information Script
 * 
 * This script displays information about the server environment,
 * including which user the application is running as and the URL used to access it.
 */

// Get the user the web server is running as
$current_user = function_exists('posix_getpwuid') ? 
    posix_getpwuid(posix_geteuid())['name'] : 
    exec('whoami');

// Get the URL used to access this page
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$current_url = $protocol . '://' . $host . $uri;

// HTML output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            color: #333;
        }
        .info-item {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 3px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Server Information</h1>
        
        <div class="info-item">
            <span class="label">Web Server User:</span> 
            <span><?php echo htmlspecialchars($current_user); ?></span>
        </div>
        
        <div class="info-item">
            <span class="label">Current URL:</span> 
            <span><?php echo htmlspecialchars($current_url); ?></span>
        </div>
        
        <div class="info-item">
            <span class="label">Server Software:</span> 
            <span><?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE']); ?></span>
        </div>
        
        <div class="info-item">
            <span class="label">PHP Version:</span> 
            <span><?php echo htmlspecialchars(phpversion()); ?></span>
        </div>
        
        <div class="info-item">
            <span class="label">Server Time:</span> 
            <span><?php echo date('Y-m-d H:i:s'); ?></span>
        </div>
    </div>
</body>
</html>