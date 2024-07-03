<?php 
require_once __DIR__ . "./User.php";
class PremiumUser extends User {
    private $offerta;

    public function __construct($offerta){
        
        $this->offerta = $offerta;
    }

    public function getOfferta(){
        return $this->offerta;
}
}

?>