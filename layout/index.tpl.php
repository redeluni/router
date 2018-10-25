
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Router</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
        <div class="template">
            <p><?= $this->page ? $this->page : 'test'?></p>
          
        </div>
    </div>
</body>
</html>
