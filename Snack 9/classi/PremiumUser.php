<?php 

class PremiumUser extends User {
    private $offerta;

    public function __construct($offerta){
    $this->offerta = $offerta;
    }
}

?>