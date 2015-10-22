<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'aDataAccess.php';
class DataAccessMySQLi extends aDataAccess
{

    private $dbConnection;
    private $result;

    // aDataAccess methods
    public function connectToDB()
    {
         $this->dbConnection = @new mysqli("localhost","root", "inet2005","sakila");
         if (!$this->dbConnection)
         {
               die('Could not connect to the Sakila Database: ' .
                        $this->dbConnection->connect_errno);
         }
    }

    public function closeDB()
    {  
        $this->dbConnection->close();
    }

    public function selectActors($start,$count)
    {
       $this->result = @$this->dbConnection->query("SELECT * FROM actor order by actor_id DESC LIMIT $start,$count");
       if(!$this->result)
       {
               die('Could not retrieve records from the Sakila Database: ' .
                       $this->dbConnection->error);
       }

    }

    public function selectFilms($start,$count)
    {
        $this->result = @$this->dbConnection->query("SELECT * FROM film LIMIT $start,$count");
        if(!$this->result)
        {
            die('Could not retrieve records from the Sakila Database: ' .
                $this->dbConnection->error);
        }

    }

    public function fetchActors()
    {
       if(!$this->result)
       {
               die('No records in the result set: ' .
                       $this->dbConnection->error);
       }
       return $this->result->fetch_array();
    }

    public function fetchFilms()
    {
        if(!$this->result)
        {
            die('No records in the result set: ' .
                $this->dbConnection->error);
        }
        return $this->result->fetch_array();
    }
    
    public function fetchActorID($row)
    {
       return $row['actor_id'];
    }

    public function fetchActorFirstName($row)
    {
       return $row['first_name'];
    }

    public function fetchActorLastName($row)
    {
       return $row['last_name'];
    }

    public function fetchFilmID($row)
    {
        return $row['film_id'];
    }

    public function fetchTitle($row)
    {
        return $row['title'];
    }

    public function fetchDescription($row)
    {
        return $row['description'];
    }

    public function selectSingleActor($actorId)
    {
        // new for address
        $sql = "SELECT * from actor WHERE actor_id = $actorId; ";


        $this->result = @$this->dbConnection->query($sql);
        if(!$this->result)
        {
            die('Could not retrieve records from the Sakila Database: ' .
                $this->dbConnection->error);
        }
    }

    public function insertActor($firstName,$lastName)
    {
       $this->result = @$this->dbConnection->query("INSERT INTO actor(first_name,last_name) VALUES('$firstName','$lastName');");
       
       return $this->dbConnection->affected_rows;

    }

    public function updateActor($firstName,$lastName, $actorId)
    {
        $this->result = @$this->dbConnection->query("UPDATE actor SET first_name = '$firstName',last_name = '$lastName' WHERE actor_id = '$actorId';");

        return $this->dbConnection->affected_rows;

    }

    public function deleteActor($actorId)
    {
        $this->result = @$this->dbConnection->query("DELETE FROM actor WHERE actor_id = '$actorId';");

        return $this->dbConnection->affected_rows;

    }
}

?>
