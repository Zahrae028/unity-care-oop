<?php


class Person
{

    private string $firstName;
    private string $lastName;
    private string $email;
    private string $phone;



    public function __construct($firstName, $lastName, $email, $phone)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone;
    }


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
     public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setEmail($emailParam)
    {
        $this->email = $emailParam;
    }
    public function setPhone($phoneParam)
    {
        $this->phone = $phoneParam;
    }



}







?>