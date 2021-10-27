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

    // $myFavoriteMovie = new Movie('Good Will Hunting', 'Psychological drama', 'Matt Damon');
    // $mySecondFavoriteMovie = new Movie('The Shawshank Redemption', 'Drama', 'Tim Robbins');

    $movies = [
        new Movie('Good Will Hunting', 'Psychological drama', 'Matt Damon'),
        new Movie('The Shawshank Redemption', 'Drama', 'Tim Robbins')
    ];
    
    var_dump($movies)
?>

<h1>My favourite movies:</h1>
<?php foreach ($movies as $movie){; ?>

    <p>Title: <?= $movie -> get_title(); ?></p>
    <p>Genre: <?= $movie -> get_genre(); ?></p>
    <p>Main actor: <?= $movie -> mainActor; ?></p>

    ---

<?php }; ?>
