<?php

/**
 * class Movies
 * defines Movies class
 * @author Alessio Dileo
 */

class Movies {
    public $title;
    public $year;
    public $original_lang;
    public $genres;
    public $director;
    public $actors;
    public $img_name;
    private $img_path;

    function __construct(String $title, Int $year, String $original_lang, Array $genres, Mixed $director, Array $actors, String $img_name = "image_not_available.png")
    {
        $this->title = $title;
        $this->year = $year;
        $this->original_lang = $original_lang;
        $this->genres = $genres;
        $this->director = $director;
        $this->actors = $actors;
        $this->img_name = $img_name;
    } 

    public function setImgPath(){
        $this->img_path = "img/$this->img_name";
    }

    public function getImgPath(){
        return $this->img_path;
    }
}

?>