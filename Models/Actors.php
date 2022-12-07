<?php
/**
 * class Actors
 * defines Actors class
 * @author Alessio Dileo
 */
class Actors {
    public $name;
    public $date_of_birth;
    public $birth_place;
    public $biography;

    function __construct($name, $date_of_birth, $birth_place, $biography = "")
    {
        $this->name = $name;
        $this->date_of_birth = $date_of_birth;
        $this->birth_place = $birth_place;
        $this->biography = $biography;
    }
}
?>