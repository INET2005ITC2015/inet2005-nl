<?php

require_once '../Business/iBusinessObject.php';
require_once '../Data/aDataAccess.php';

class Film implements iBusinessObject
{
    private $m_filmId;
    private $m_title;
    private $m_description;


    public function __construct($in_title,$in_description)
    {
        $this->m_title = $in_title;
        $this->m_description = $in_description;
    }

    public function getID()
    {
        return ($this->m_filmId);
    }

    public function getTitle()
    {
        return ($this->m_title);
    }

    public function getDescription()
    {
        return ($this->m_description);
    }

    public static function retrieveSome($start,$count)
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $myDataAccess->selectFilms($start,$count);

        while($row = $myDataAccess->fetchFilms())
        {
            $currentFilm = new self($myDataAccess->fetchTitle($row),
                $myDataAccess->fetchDescription($row));
            $currentFilm->m_filmId = $myDataAccess->fetchFilmID($row);
            $arrayOfFilmObjects[] = $currentFilm;
        }

        $myDataAccess->closeDB();

        return $arrayOfFilmObjects;
    }

    public function save(){

    }

    public function update(){

    }

    public function delete(){

    }

    public static function retrieveSingleActor($actorId){
    }
}

?>
