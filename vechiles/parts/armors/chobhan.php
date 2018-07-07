<?php

namespace Vechiles\Parts\Armors;

require_once 'armor.php';

use \Vechiles\Parts\Armor;

class Chobhan extends Armor {

    /**
     * Class constructor
     */
    public function __construct(){
        parent::__construct(2200);
    }

    /**
     * Turns Chobhan object instance into a string
     */
    public function toString(){
        return 'Chobhan Tank Armor. ' . parent::toString();
    }
}

?>