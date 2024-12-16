<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My my Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1em 0;
            text-align: center;
        }
        nav {
            text-align: center;
            padding: 1em;
            background-color: #333;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 2em;
            text-align: center;
        }
        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .card {
            display: inline-block;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 1em;
            width: 300px;
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card-content {
            padding: 1em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Page</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>

    <main>
        <h2>Dynamic Content Below</h2>
        <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Sample Image">
            <div class="card-content">
                <?php
                    echo "<h3>Card Title</h3>";
                  
                ?>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My  Page. All rights reserved.</p>
    </footer>
</body>
</html>
