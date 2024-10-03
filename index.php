<?php 
    $booksJson=file_get_contents('books.json');
    $books = json_decode($booksJson,true);
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Books</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <td>Title</td>
                <td>Author</td>
                <td>Available</td>
                <td>Pages</td>
                <td>isbn</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($books as $book): ?>
            <tr>
                <td><?php echo $book['title']?></td>
                <td><?php echo $book['author']?></td>
                <?php 
                    if($book['available']) : 
                ?>
                <td>Yes</td>
                <?php 
                    else :                         
                ?>
                <td>No</td>
                <?php 
                    endif;
                ?>
                <td><?php echo $book['pages']?></td>
                <td><?php echo $book['isbn']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form class='form' action="write.php" method="post">
        <label>Title</label>
        <input type="text" name="title" require />
        <label>Author</label>
        <input type="text" name="author" require />
        <label>pages</label>
        <input type="number" name="pages" require />
        <input type="submit" value="Add" />
    </form>
</body>