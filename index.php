<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Film Class</title>
    <!-- 
    * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
    -->
    <?php
        class Film {
            public $title;
            public $subtitle;
            public $director;

            public function __construct($title) {
                $this -> title = $title;
            }
            public function getFullTitle() {
                if ($this->subtitle) {
                    return "Title: " . $this->title . ": " . $this->subtitle;
                } else {
                    return "Title: " . $this->title;
                }
            }
            public function __toString() {
                if ($this->director) {
                    return $this->getFullTitle() . " | " . $this->director;
                } else {
                    return $this->getFullTitle() . " | " . "???";
                }
            }
        }
        $film1 = new Film("Matrix");
        $film2 = new Film("Fantozzi 2");
        $film3 = new Film("Peter Pan");

        $film1 -> subtitle = null;
        $film2 -> subtitle = "il ritorno di fantozzi";
        $film3 -> subtitle = "il ritorno all'isola che non c'e'";

        $film1 -> director = null;
        $film2 -> director = null;
        $film3 -> director = "Robin Budd";
    ?>
</head>
<body>
    <div class="container">
        <?php
            echo "<h2>- Uno con solo il titolo</h2>" . "<br>";
            echo $film1 -> title . "<br>";
            echo $film2 -> title . "<br>";
            echo $film3 -> title . "<br>";
            echo "<br>";
            echo "<h2>- Uno con titolo e sottotitolo</h2>" . "<br>";
            echo $film1 -> getFullTitle() . "<br>";
            echo $film2 -> getFullTitle() . "<br>";
            echo $film3 -> getFullTitle() . "<br>";
            echo "<br>";
            echo "<h2>- Uno con titolo, sottotiolo e regista</h2>" . "<br>";
            echo $film1 . "<br>";
            echo $film2 . "<br>";
            echo $film3 . "<br>";
        ?>
    </div>
    
</body>
</html>