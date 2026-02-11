<!DOCTYPE html>
    <html lang="en">
        <head>
            
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.e">
        <title><?php echo  isset($title) ? $title : "My Website"; ?></title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            padding - bottom: 40px;
            background-color: #bbc1cd;
            min-height: 100vh;
            position: relative;
        }
        header {
            background-color: #022c46;
            color: white;
            padding: 25px;
            text-align: center;
        }
        nav ul {
    
            list-style: none;
            margin: 0;
            padding: 0;
            justify-content: Center;
            display: Flex;
        }
        nav {background: #729fad}
        nav li { margin: 1px 10px; }
        nav a { colour: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #452a02 !important; }

        footer {
            background-color: #022c46;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }

    
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <p>Class Room Task</p>
        <nav class="navbar navbar-expand-lg justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="ex1.php">Task 1</a></li>
            <li class="nav-item"><a class="nav-link" href="ex2.php">Task 2</a></li>
            <li class="nav-item"><a class="nav-link" href="ex3.php">Task 3</a></li>
            <li class="nav-item"><a class="nav-link" href="ex4.php">Task 4</a></li>
        
    </ul>
    </nav>
</header>