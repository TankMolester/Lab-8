<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Login';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background: #f5f5f5;
            color: #222;
        }

        main {
            max-width: 480px;
            margin: 0 auto;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #1a73e8;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input {
            width: 100%;
            margin-bottom: 1rem;
            padding: 0.7rem;
            box-sizing: border-box;
        }

        button {
            padding: 0.75rem 1.25rem;
            background: #1a73e8;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a {
            color: #1a73e8;
        }
    </style>
</head>
<body>
    <main>
