<?php
    class Movie {

        // PROPRIETA - ATTRIBUTI
        public $title;
        public $genre;
        public $year;
        public $originalLanguage;
        public $productionCountry;
        public $lenght;
        
        // METODI

            // COSTRUTTORE
            function __construct($genre, $year, $originalLanguage, $productionCountry, $lenght){
    
                $this->genre = $genre;
                $this->year = $year;
                $this->originalLanguage = $originalLanguage;
                $this->productionCountry = $productionCountry;
                $this->lenght = $lenght;
            }

            // FUNZIONI
            public function setTitle($title){

                $this->title = strtoupper($title);
            }
    }

    // DICHIARO VARIABILI D'ISTANZA
    $Matrix = new Movie('Sci-fi', '1999', 'English', 'USA', 92);
    $MatrixReloaded = new Movie('Sci-fi', '2003', 'English', 'USA', 108);
    $MatrixRevolutions = new Movie('Sci-fi', '2003', 'English', 'USA', 118);

    // ASSEGNAZIONE VALORE PROPRIETA "TITLE"
    $Matrix->setTitle('Matrix');
    $MatrixReloaded->setTitle('Matrix Reloaded');
    $MatrixRevolutions->setTitle('Matrix Revolutions');

    var_dump($Matrix);
    var_dump($MatrixReloaded);
    var_dump($MatrixRevolutions);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>php-oop-1</title>
    </head>
    <body>
    </body>
</html>