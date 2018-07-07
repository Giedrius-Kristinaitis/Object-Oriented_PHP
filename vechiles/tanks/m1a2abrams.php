<?php

namespace Vechiles\Tanks;

require_once 'tank.php';
require_once __DIR__ . '/../parts/armors/chobhan.php';
require_once __DIR__ . '/../parts/engines/honeywellagt1500.php';
require_once __DIR__ . '/../parts/turrets/m68a1.php';

use \Vechiles\Parts\Armors\Chobhan;
use \Vechiles\Parts\Turrets\M68A1;
use \Vechiles\Parts\Engines\HoneywellAGT1500;
use \Vechiles\Tank;

class M1A2Abrams extends Tank {

    /**
     * Class constructor
     * @param string name - name of the tank
     */
    public function __construct($name){
        parent::__construct($name, new HoneywellAGT1500(), new M68A1(), new Chobhan());
    }

    /**
     * Turns M1A2Abrams object instance into a string
     */
    public function toString(){
        return 'M1A2Abrams Main Battle Tank. ' . $this->engine->toString() . '. ' . $this->turret->toString() . '. ' . $this->armor->toString();
    }
}

?>