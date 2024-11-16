<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XB Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .directory {
            margin-top: 20px;
        }
        .directory ul {
            list-style-type: none;
            padding-left: 20px;
        }
        .directory li {
            margin: 5px 0;
        }
        .directory a {
            text-decoration: none;
            color: #007BFF;
        }
        .directory a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Class Website</h1>
    <p>Below is the list of sub-websites (directories and their contents) in the class website:</p>
    
    <div class="directory">
        <h2>Sub-Websites</h2>
        <?php
        // Function to recursively read directories and files
        function listDirectory($dir) {
            $files = scandir($dir);
            $files = array_diff($files, array('.', '..'));  // Remove '.' and '..' directories

            if (count($files) > 0) {
                echo "<ul>";
                foreach ($files as $file) {
                    $path = $dir . '/' . $file;
                    if (is_dir($path)) {
                        echo "<li><strong>Folder: </strong><a href='#'>$file</a>";
                        listDi
