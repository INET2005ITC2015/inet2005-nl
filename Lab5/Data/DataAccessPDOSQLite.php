<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'aDataAccess.php';
class DataAccessPDOSQLite extends aDataAccess
{
    private $dbConnection;
    private $result;
    private $stmt;

    // aDataAccess methods
    public function connectToDB()
    {
        try
        {
            ///home/inet2005/Code/PHP/inet2005-nl/Lab5/Data/db/sakila.sqlite
            $this->dbConnection = new PDO("sqlite:/home/inet2005/Code/PHP/inet2005-nl/Lab5/Data/db/sakila.sqlite");
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex)
        {
            die('Could not connect to the SQLite Database via PDO: ' . $ex->getMessage());
        }
    }

    public function closeDB()
    {
        // set a PDO connection object to null to close it
        $this->dbConnection = null;
    }

    public function selectActors($start,$count)
    {
        try
        {
            $this->stmt = $this->dbConnection->prepare('SELECT * FROM actor ORDER BY actor_id DESC LIMIT :start, :count');
            $this->stmt->bindParam(':start', $start, PDO::PARAM_INT);
            $this->stmt->bindParam(':count', $count, PDO::PARAM_INT);

            $this->stmt->execute();
        }
        catch(PDOException $ex)
        {
            die('Could not select records from SQLite Database via PDO: ' . $ex->getMessage());
        }

    }

    public function selectFilms($start,$count)
    {
        try
        {
            $this->stmt = $this->dbConnection->prepare('SELECT * FROM film LIMIT :start, :count');
            $this->stmt->bindParam(':start', $start, PDO::PARAM_INT);
            $this->stmt->bindParam(':count', $count, PDO::PARAM_INT);

            $this->stmt->execute();
        }
        catch(PDOException $ex)
        {
            die('Could not select records from SQLite Database via PDO: ' . $ex->getMessage());
        }

    }

    public function fetchActors()
    {
        try
        {
            $this->result = $this->stmt->fetch(PDO::FETCH_ASSOC);
            return $this->result;
        }
        catch(PDOException $ex)
        {
            die('Could not retrieve from SQLite Database via PDO: ' . $ex->getMessage());
        }

    }

    public function fetchFilms()
    {
        try
        {
            $this->result = $this->stmt->fetch(PDO::FETCH_ASSOC);
            return $this->result;
        }
        catch(PDOException $ex)
        {
            die('Could not retrieve from SQLite Database via PDO: ' . $ex->getMessage());
        }

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
        try
        {
            $this->stmt = $this->dbConnection->prepare('SELECT * FROM actor WHERE actor_id = :actorId');
            $this->stmt->bindParam(':actorId', $actorId, PDO::PARAM_INT);

            $this->stmt->execute();
        }
        catch(PDOException $ex)
        {
            die('Could not select records from SQLite Database via PDO: ' . $ex->getMessage());
        }

    }


    public function insertActor($firstName,$lastName)
    {
        try
        {
            $this->stmt = $this->dbConnection->prepare('SELECT MAX(actor_id) FROM actor');
            $this->stmt->execute();
            $row =  $this->stmt->fetch();
            $row = $row[0] + 1;

            $this->stmt = $this->dbConnection->prepare('INSERT INTO actor(actor_id, first_name,last_name) VALUES(:row, :firstName, :lastName)');
            $this->stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
            $this->stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $this->stmt->bindParam(':row', $row, PDO::PARAM_INT);
            $this->stmt->execute();

            return $this->stmt->rowCount();
        }
        catch(PDOException $ex)
        {
            die('Could not insert record into SQLite Database via PDO: ' . $ex->getMessage());
        }
    }

    public function updateActor($firstName, $lastName, $actorId){

        try
        {
            $this->stmt = $this->dbConnection->prepare('UPDATE actor SET first_name = :firstName,last_name = :lastName WHERE actor_id = :actorId;');
            $this->stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
            $this->stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $this->stmt->bindParam(':actorId', $actorId, PDO::PARAM_INT);
            $this->stmt->execute();

            return $this->stmt->rowCount();
        }
        catch(PDOException $ex)
        {
            die('Could not insert record into SQLite Database via PDO: ' . $ex->getMessage());
        }
    }

    public function deleteActor($actorId)
    {
        try
        {
            $this->stmt = $this->dbConnection->prepare('DELETE FROM actor WHERE actor_id = :actorId;');
            $this->stmt->bindParam(':actorId', $actorId, PDO::PARAM_INT);
            $this->stmt->execute();

            return $this->stmt->rowCount();
        }
        catch(PDOException $ex)
        {
            die('Could not insert record into SQLite Database via PDO: ' . $ex->getMessage());
        }

    }

    public function selectDataForSearch($start,$count, $query)
    {

        try
        {
            $query = "%" .$query. "%";
            $this->stmt = $this->dbConnection->prepare('SELECT * FROM actor WHERE first_name LIKE :query OR last_name LIKE :query ORDER BY actor_id DESC LIMIT :start, :count');
            $this->stmt->bindParam(':start', $start, PDO::PARAM_INT);
            $this->stmt->bindParam(':count', $count, PDO::PARAM_INT);
            $this->stmt->bindParam(':query', $query, PDO::PARAM_STR);
            $this->stmt->execute();
        }
        catch(PDOException $ex)
        {
            die('Could not select records from SQLite Database via PDO: ' . $ex->getMessage());
        }

    }
}


