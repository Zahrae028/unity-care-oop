<?php 
require_once 'person.php' ;


class Doctor extends Person {

    public int $departmentId ;
    

 public function __construct( $firstName , $lastName , $email ,$phone ,$departmentId)
    {
       parent:: __construct($firstName , $lastName , $email , $phone);
        $this->departmentId = $departmentId;
    }

    public function setDepartmentId($departmentId){
        $this->departmentId = $departmentId ;
    }

};

?>