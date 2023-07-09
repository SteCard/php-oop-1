<?php
    class Movie {

        // PROPRIETA - ATTRIBUTI
        public $title;
        public $genre;
        public $year;
        public $originalLanguage;
        public $productionCountry;
        public $duration;
        
        // METODI

            // COSTRUTTORE
            function __construct($genre, $year, $originalLanguage, $productionCountry, $duration){
    
                $this->genre = $genre;
                $this->year = $year;
                $this->originalLanguage = $originalLanguage;
                $this->productionCountry = $productionCountry;
                $this->duration = $duration;
            }

            // FUNZIONI
            public function setTitle($title){

                $this->title = strtoupper($title);
            }
    }

    // DICHIARO VARIABILI D'ISTANZA
    $Matrix = new Movie('Sci-fi', '1999', 'Inglese', 'USA', 136);
    $MatrixReloaded = new Movie('Sci-fi', '2003', 'Inglese', 'USA', 148);
    $MatrixRevolutions = new Movie('Sci-fi', '2003', 'Inglese', 'USA', 129);

    // ASSEGNAZIONE VALORE PROPRIETA "TITLE"
    $Matrix->setTitle('Matrix');
    $MatrixReloaded->setTitle('Matrix Reloaded');
    $MatrixRevolutions->setTitle('Matrix Revolutions');

    // var_dump($Matrix);
    // var_dump($MatrixReloaded);
    // var_dump($MatrixRevolutions);

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
    <body class="bg-primary bg-gradient">
        <main>
            <div class="container my-5">
                <div class="row align-items-center">
                    <div class="col-12">
                        <ol type="I" class="d-flex flex-column align-items-center bg-light rounded-3 display-6 p-5">
                            <!-- Movie 1 -->
                            <li class="my-5">
                                <h1>
                                    <?php echo $Matrix->title ?>
                                </h1>
                                <ul>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Genere: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $Matrix->genre ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Anno: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $Matrix->year ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Lingua Originale: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $Matrix->originalLanguage ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Paese Di Produzione: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $Matrix->productionCountry ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Durata: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $Matrix->duration." min " ?>
                                        </span>
                                    </li>
                                </ul>
                            </li>

                            <hr class="border border-2 border-black w-100">
                            
                            <!-- Movie 2 -->
                            <li class="my-5">
                                <h1>
                                    <?php echo $MatrixReloaded->title ?>
                                </h1>
                                <ul>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Genere: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixReloaded->genre ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Anno: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixReloaded->year ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Lingua Originale: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixReloaded->originalLanguage ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Paese Di Produzione: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixReloaded->productionCountry ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Durata: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixReloaded->duration." min " ?>
                                        </span>
                                    </li>
                                </ul>
                            </li>

                            <hr class="border border-2 border-black w-100">
                            
                            <!-- Movie 3 -->
                            <li class="my-5">
                                <h1>
                                    <?php echo $MatrixRevolutions->title ?>
                                </h1>
                                <ul>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Genere: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixRevolutions->genre ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Anno: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixRevolutions->year ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Lingua Originale: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixRevolutions->originalLanguage ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Paese Di Produzione: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixRevolutions->productionCountry ?>
                                        </span>
                                    </li>
                                    <li class="my-3">
                                        <strong>
                                            <?php echo "Durata: " ?>
                                        </strong>
                                        <span>
                                            <?php echo $MatrixRevolutions->duration." min " ?>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

        </main>
    </body>
</html>