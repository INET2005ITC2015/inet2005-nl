<?php

require_once '../Business/iBusinessObject.php';
require_once '../Data/aDataAccess.php';

class Actor implements iBusinessObject
{
    private $m_actorId;
    private $m_firstName;
    private $m_lastName;
    
    public function __construct($in_fname,$in_lname, $in_actorId)
    {
        //$this->m_actorId = $in_actorId;
        $this->m_firstName = $in_fname;
        $this->m_lastName = $in_lname;
        $this->m_actorId = $in_actorId;

    }
    
    public function getID()
    {
        return ($this->m_actorId);
    }
    
    public function getFirstName()
    {
        return ($this->m_firstName);
    }

    public function getLastName()
    {
        return ($this->m_lastName);
    }


    public static function retrieveSome($start,$count)
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $myDataAccess->selectActors($start,$count);
        
        while($row = $myDataAccess->fetchActors())
        {
            $currentActor = new self($myDataAccess->fetchActorFirstName($row),
                $myDataAccess->fetchActorLastName($row), $myDataAccess->fetchActorID($row));
            $currentActor->m_actorId = $myDataAccess->fetchActorID($row);
            $arrayOfActorObjects[] = $currentActor;
        }

        $myDataAccess->closeDB();
        
        return $arrayOfActorObjects;
    }
    
    public function save()
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $recordsAffected = $myDataAccess->insertActor($this->m_firstName,$this->m_lastName);

        $myDataAccess->closeDB();

        return "$recordsAffected row(s) affected!";
        
    }

    public function update()
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $recordsAffected = $myDataAccess->updateActor($this->m_firstName,$this->m_lastName, $this->m_actorId);

        $myDataAccess->closeDB();

        return "$recordsAffected row(s) affected!";

    }

    public function delete()
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $recordsAffected = $myDataAccess->deleteActor($this->m_actorId);

        $myDataAccess->closeDB();

        return "$recordsAffected row(s) affected!";

    }

    public static function retrieveForSearch($start,$count, $query){
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $myDataAccess->selectDataForSearch($start,$count, $query);

        while($row = $myDataAccess->fetchActors())
        {
            $currentActor = new self($myDataAccess->fetchActorFirstName($row),
                $myDataAccess->fetchActorLastName($row), $myDataAccess->fetchActorID($row));
            $currentActor->m_actorId = $myDataAccess->fetchActorID($row);
            $arrayOfActorObjects[] = $currentActor;
        }

        $myDataAccess->closeDB();

        return $arrayOfActorObjects;
    }

    public static function retrieveSingleActor($actorId)
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $myDataAccess->selectSingleActor($actorId);

        $record = $myDataAccess->fetchActors();

        $currentActor = new self($myDataAccess->fetchActorFirstName($record),
            $myDataAccess->fetchActorLastName($record), $myDataAccess->fetchActorID($record));
        $currentActor->m_actorId = $myDataAccess->fetchActorID($record);
        $currentActor->m_firstName = $myDataAccess->fetchActorFirstName($record);
        $currentActor->m_lastName = $myDataAccess->fetchActorLastName($record);

        $myDataAccess->closeDB();

        return $currentActor;
    }
}



