<?php 
    $newBooks = [
        [
            "title" => $_POST["title"],
            "author" => $_POST["author"],
            "available" => true,
            "pages" => $_POST["pages"],
            "isbn" => 12345567,
        ]
    ];
    $booksJson=file_get_contents('books.json');
    $previousBooks = json_decode($booksJson,true);
    $allBooks = array_merge($previousBooks,$newBooks);
    $booksJson = json_encode($allBooks);
    file_put_contents(__DIR__ . '/books.json', $booksJson);
?>
<p>New book added successfully! <a href="/index.php">go back</a></p>