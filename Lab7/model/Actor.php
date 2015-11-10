<?php


class Actor
{
    private $m_actor_Id;
    private $m_firstName;
    private $m_lastName;

    public function __construct($in_id,$in_fName,$in_lName)
    {
        $this->m_actor_Id = $in_id;
        $this->m_firstName = $in_fName;
        $this->m_lastName = $in_lName;
    }
    
    public function getID()
    {
        return ($this->m_actor_Id);
    }
    
    public function getFirstName()
    {
        return ($this->m_firstName);
    }
    
    public function setFirstName($in_firstName)
    {
        $this->m_firstName = $in_firstName;
    }

    public function getLastName()
    {
        return ($this->m_lastName);
    }
    
    public function setLastName($in_lastName)
    {
        $this->m_lastName = $in_lastName;
    }

}


