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
    public $genre;
    public $director;
    public $actors;
    public $img_name;
    private $img_path;

    function __construct(String $title, Int $year, String $original_lang, Array $genre, Mixed $director, String $actors, String $img_name = "")
    {
        $this->title = $title;
        $this->year = $year;
        $this->original_lang = $original_lang;
        $this->genre = $genre;
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