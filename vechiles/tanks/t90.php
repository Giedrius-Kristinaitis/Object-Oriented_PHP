<?php

namespace Vechiles\Tanks;

require_once 'tank.php';
require_once __DIR__ . '/../parts/armors/steelcomposite.php';
require_once __DIR__ . '/../parts/engines/v84ms.php';
require_once __DIR__ . '/../parts/turrets/gun2a46m.php';

use \Vechiles\Parts\Armors\SteelComposite;
use \Vechiles\Parts\Turrets\Gun2A46M;
use \Vechiles\Parts\Engines\V84MS;
use \Vechiles\Tank;

class T90 extends Tank {

    /**
     * Class constructor
     * @param string name - name of the tank
     */
    public function __construct($name){
        parent::__construct($name, new V84MS(), new Gun2A46M(), new SteelComposite());
    }

    /**
     * Turns T90 object instance into a string
     */
    public function toString(){
        return 'T-90 Main Battle Tank. ' . $this->engine->toString() . '. ' . $this->turret->toString() . '. ' . $this->armor->toString();
    }
}

?>