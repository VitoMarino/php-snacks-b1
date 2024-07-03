<?php 
/**
 *  Created class Utente
 * 
 * 
 */
class User {
    private $userName;
    private $password;

    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function setUtente($userName, $password){
        $userName = "Gino@mail.com";
        $password = "Passwordsicurissima";
    }

}




?>