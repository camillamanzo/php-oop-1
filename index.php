<?php 

    class Movie {

        public $title;
        public $genre;
        public $mainActor;
        public $plot;
        public $releaseDate;
        public $originalLanguage;

        function __construct($_title, $_genre, $_mainActor){
            $this -> title = $_title;
            $this -> genre = $_genre;
            $this -> mainActor = $_mainActor;
        }

        function get_title() {
            return $this -> title;
          }
          function get_genre() {
            return $this -> genre;
          }
    }

    $myFavoriteMovie = new Movie('Good Will Hunting', 'Psychological drama', 'Matt Damon');
    $mySecondFavoriteMovie = new Movie('The Shawshank Redemption', 'Drama', 'Tim Robbins');

?>

<h1>My favourite movie:</h1>

<p>Title: <?= $myFavoriteMovie -> get_title(); ?></p>
<p>Genre: <?= $myFavoriteMovie -> get_genre(); ?></p>
<p>Main actor: <?= $myFavoriteMovie -> mainActor; ?></p>
