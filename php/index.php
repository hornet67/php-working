<?php 

 $books = [
        "The Apple in the Dark",
        "Hail Mary" ,
        "The Lord of the Rings"
    ];

    $authers = [
         "Jeanette Winterson",
         "Cory Doctorow",
         "J.R.R. Tolkien"
    ];

  
  $books = [
        [
            "title"=>"To Kill a Mockingbird",
            "author"=>"Harper Lee",
            "released_date"=>"1960-07-11",
            "url"=>"https://en.wikipedia.org/wiki/To_Kill_a_Mockingbird"
        ],
        [
            "title"=>"1984",
            "author"=>"George Orwell",
            "released_date"=>"1949-06-08",
            "url"=>"https://en.wikipedia.org/wiki/Nineteen_Eighty-Four"
        ],

        [
            "title"=>"Hell on the Border",
            "author"=>"George Orwell",
            "released_date"=>"1947-06-08",
            "url"=>"https://en.wikipedia.org/wiki/Nineteen_Eighty-Four"
        ],

        [
            "title"=>"The Great Gatsby",
            "author"=>"F. Scott Fitzgerald",
            "released_date"=>"1925-04-10",
            "url"=>"https://en.wikipedia.org/wiki/The_Great_Gatsby"
        ]
    ];
   
function booknfilter($books, $auther){
    $filtered_books = [];

    foreach($books as $book){
        if($book['author'] === $auther){
            $filtered_books[] = $book;
        }
    }

    return $filtered_books;
}

require "index.view.php";