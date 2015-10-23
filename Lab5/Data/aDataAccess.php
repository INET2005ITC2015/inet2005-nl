<?php

// So, which database implementation will we use??
require_once '../Data/DataAccessMySQLi.php';
//require_once '../Data/DataAccessPDOMySQL.php';
//require_once '../Data/DataAccessPDOSQLite.php';

abstract class aDataAccess
{
    private static $m_DataAccess;

    public static function getInstance()
    {
        // singleton
        if(self::$m_DataAccess == null)
        {
            self::$m_DataAccess = new DataAccessMySQLi();
            //self::$m_DataAccess = new DataAccessPDOMySQL();
            //self::$m_DataAccess = new DataAccessPDOSQLite();
        }
        return self::$m_DataAccess;
    }

    public abstract function connectToDB();

    public abstract function closeDB();

    public abstract function selectActors($start,$count);

    public abstract function selectFilms($start,$count);

    public abstract function fetchFilms();

    public abstract function fetchActors();
    
    public abstract function fetchActorID($row);

    public abstract function fetchActorFirstName($row);

    public abstract function fetchActorLastName($row);

    public abstract function selectSingleActor($actorId);

    public abstract function selectDataForSearch($start, $count, $query);

    public abstract function fetchFilmID($row);

    public abstract function fetchTitle($row);

    public abstract function fetchDescription($row);
    
    public abstract function insertActor($firstName,$lastName);

    public abstract function updateActor($firstName,$lastName, $actorId);

    public abstract function deleteActor($actorId);
}
?>
