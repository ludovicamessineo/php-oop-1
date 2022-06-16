<?php
    
class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;
    public $duration;

    function __construct($_title, $_director, $_duration, $_year, $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->genre = $_genre;
        
    }

    public function getMovieInfo() {
        return "Durata: $this->duration | Anno: $this->year <br> Genere: $this->genre" ;
    }

    public function getMovieInfoArray() {
        return [
            "title" => $this->title,
            "director" => $this->director,
            "duration" => $this->duration,
            "year" => $this->year,
            "genre" => $this->genre
        ];
    }
}

$goodfellas = new Movie("Quei Bravi Ragazzi", "Martin Scorsese", "143 min", 1990, "Giallo/Drammatico");
// var_dump($goodfellas)

$oldboy = new Movie("Old Boy", "Park Chan-wook", "119 min", 2003, "Mistero/Azione");

$snatch = new Movie("Snatch - Lo Strappo", "Guy Ritchie", "104 min", 2000, "Giallo/Commedia");


?>

<?php $goodfellasArray = $goodfellas->getMovieInfoArray()?>
<h2> <?php echo $goodfellasArray["title"]; ?> </h2> 

<h3> <?php echo $goodfellasArray["director"]; ?> </h3>

<p> <?php echo $goodfellas->getMovieInfo();?> </p>

<br>

<?php $oldboyArray = $oldboy->getMovieInfoArray()?>
<h2> <?php echo $oldboyArray["title"]; ?> </h2> 

<h3> <?php echo $oldboyArray["director"]; ?> </h3>

<p> <?php echo $oldboy->getMovieInfo();?> </p>

<br>

<?php $snatchArray = $snatch->getMovieInfoArray()?>
<h2> <?php echo $snatchArray["title"]; ?> </h2> 

<h3> <?php echo $snatchArray["director"]; ?> </h3>

<p> <?php echo $snatch->getMovieInfo();?> </p>