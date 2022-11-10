<?php

class VideoStore
{
    private array $movies;
    private function addMovies(Video $video)
    {
        $this->movies[] = $video;
        $video->checkOut();

    }
    private function rentVideo()
    {

    }

    private function returnVideo()
    {

    }

    private function listInventory()
    {

    }
}

class Video
{
    public string $title;
    public string $isCheckedOut;
    public float $rating;

    public function __construct(string $title, string $isCheckedOut, float $rating)
    {
        $this->title = $title;
        $this->isCheckedOut = $isCheckedOut;
        $this->rating = $rating;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getIsCheckedOut(): bool{
        return $this->isCheckedOut;
    }

    public function getAverageRating():float{
        $averageRating = 0;
        for($i = 0; $i<count($this->rating); $i++){
            $averageRating += $this->rating[$i];
        }
        return $averageRating/count($this->rating);
    }

    public function checkOut(): bool{
        return $this->isCheckedOut = true;
    }

    public function setRating(float $rating){
        $this->rating[] = $rating;
    }
}

class Application
{
    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

}
$videos =  [
    $video1 = new Video("The Matrix"),
    $video2 = new Video("Godfather II"),
    $video3 = new Video("Star Wars Episode IV: A New Hope")
];
$app = new Application();
$app->run();
