<?php

class Movie{
   public string $title;
   public string $studio;
   public string $rating;

   function __construct(string $title, string $studio, string $rating)
   {
      $this->title = $title;
      $this->studio = $studio;
      $this->rating= $rating;

   }

   function printMovie() : string{
       return $this->title . ", the studio ". $this->studio . " and the rating " . $this->rating . PHP_EOL;
   }
    public static function getPG(array $movies): array
    {
        $foundMovies = [];
        foreach ($movies as $movie) {
            if ($movie->rating === "PG") {
                $foundMovies[] = $movie;
            }
        }
        return $foundMovies;
    }


}
$movies =[
new Movie("Casino Royale", "Eon Productions", "PG13"),
new Movie("Glass", "Buena Vista International", "PG13"),
new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),];

echo "The list of PG rated movies:\n";
foreach (Movie::getPG($movies) as $movie) {
    echo "Movie: {$movie->getTitle()}, studio: {$movie->getStudio()}, rating: {$movie->getRating()}\n";
}