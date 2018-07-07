<?php

namespace Vechiles\Parts\Armors;

require_once 'armor.php';

use \Vechiles\Parts\Armor;

class SteelComposite extends Armor {

    /**
     * Class costructor
     */
    public function __construct(){
        parent::__construct(1250);
    }
    
    /**
     * Turns SteelComposite object instance into a string
     */
    public function toString(){
        return 'Steel Composite Tank Armor. ' . parent::toString();
    }
}

?>