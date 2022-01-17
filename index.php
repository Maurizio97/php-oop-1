<!-- /**
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
     */ -->
<?php
class Film {
    public $title;
    public $subTitle;
    public $movieDirector;

    public function __construct($title){
    $this -> title = $title;
    }

    public function getFullTitle(){
        if($this -> subTitle){
           return $this -> title . ": " . $this -> subTitle;
        } else {
            return $this -> title;
        }
    }

    public function __toString(){
        if($this -> movieDirector){
            return $this -> getFullTitle() . " | " . $this -> movieDirector . "<br>";
        }else {
            return $this -> getFullTitle() . " | " . "???" . "<br>";
        }
    }
}

$film1 = new Film("Matrix");
$film2 = new Film("Venom");
$film3 = new Film("Spiderman");

$film2 -> subTitle = "La Furia Di Carnage"; 
$film3 -> subTitle = "No Way Home"; 

$film3 -> movieDirector = "Jonh Watts";

echo $film1;
echo $film2;
echo $film3;
?>