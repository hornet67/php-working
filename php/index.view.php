<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Home</title>
</head>
<body>


<h1>The list of books I read are given below:</h1>

<ul>

<?php foreach(booknfilter($books,"George Orwell") as $book): ?>

    <li>
        <strong>Title:</strong> <?= $book["title"] ?><br>
        <strong>Author:</strong> <?= $book["author"] ?><br>
        <strong>Released:</strong> <?= $book["released_date"] ?><br>
        <strong>URL:</strong>
        <a href="<?= $book["url"] ?>">
            <?= $book["url"] ?>
        </a>
    </li>

    <br>

<?php endforeach; ?>

</ul>

</body>
</html>