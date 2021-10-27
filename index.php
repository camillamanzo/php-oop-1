<?php 

    class Movie {

        public $title;
        public $genre;
        public $mainActor;
        public $plot;
        public $releaseDate;
        public $originalLanguage;

        // construct function that gets properties upon initialization of the object
        function __construct($_title, $_genre, $_mainActor){
            $this -> title = $_title;
            $this -> genre = $_genre;
            $this -> mainActor = $_mainActor;
        }

        // function that gets title
        function get_title() {
            return $this -> title;
          }

        // function that gets genre
        function get_genre() {
            return $this -> genre;
          }
    }

    // $myFavoriteMovie = new Movie('Good Will Hunting', 'Psychological drama', 'Matt Damon');
    // $mySecondFavoriteMovie = new Movie('The Shawshank Redemption', 'Drama', 'Tim Robbins');

    $movies = [
        new Movie('Good Will Hunting', 'Psychological drama', 'Matt Damon'),
        new Movie('The Shawshank Redemption', 'Drama', 'Tim Robbins')
    ];
    
    // var_dump($movies)
?>

<h1>My favourite movies:</h1>

<!-- initialized foreach on the movies array -->
<?php foreach ($movies as $movie){; ?>

    <p>Title: <?= $movie -> get_title(); ?></p>
    <p>Genre: <?= $movie -> get_genre(); ?></p>
    <p>Main actor: <?= $movie -> mainActor; ?></p>

    ---
<!-- finalized foreach on the movies array -->
<?php }; ?>
