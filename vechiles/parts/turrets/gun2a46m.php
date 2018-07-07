<?php

namespace Vechiles\Parts\Turrets;

require_once 'turret.php';

use \Vechiles\Parts\Turret;

class Gun2A46M extends Turret {

    /**
     * Class constructor
     */
    public function __construct(){
        parent::__construct(2000, 10, 5);
    }

    /**
     * Turns M68A1 object instance into a string
     */
    public function toString(){
        return '2A46M Main Tank Gun. ' . parent::toString();
    }
}

?>