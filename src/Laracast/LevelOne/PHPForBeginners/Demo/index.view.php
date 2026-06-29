<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            font-family: sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach($filteredBooks($books,"author","Andy Weir","==") as $book):?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> <?= $book['releaseYear'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>