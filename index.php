<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerable Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            margin-top: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #007bff;
        }

        p {
            color: #666;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            align: center;
            width: 30%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: #000;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vulnerable Page</h1>
        <h2>Welcome to this vulnerable page!</h2>
        <p>Some parameters are vulnerable to XSS.</p>
        <form action="" method="GET">
            <input type="text" name="search" placeholder="Search...">
            <input type="submit" value="Search">
        </form>
        <?php
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            // Output the search term without proper sanitization
            echo 'You searched for: ' . $search;
        } else {
            echo 'No search term provided.';
        }
        ?>
    </div>
</body>
</html>
