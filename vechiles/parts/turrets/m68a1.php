<?php

namespace Vechiles\Parts\Turrets;

require_once 'turret.php';

use \Vechiles\Parts\Turret;

class M68A1 extends Turret {

    /**
     * Class constructor
     */
    public function __construct(){
        parent::__construct(1500, 6, 3);
    }

    /**
     * Turns M68A1 object instance into a string
     */
    public function toString(){
        return 'M68A1 Main Tank Gun. ' . parent::toString();
    }
}

?>