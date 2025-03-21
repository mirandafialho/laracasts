<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            font-family: sans-serif;
            height: 100vh;
            margin: 0;
            display: contents;
        }
    </style>
</head>
<body>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>™ (<?= $book['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <p>
        <?php foreach (filter($books, 'author','Andy Weir') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>™ (<?= $book['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </p>
</body>
</html>