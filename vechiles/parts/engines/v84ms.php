<?php

namespace Vechiles\Parts\Engines;

require_once 'engine.php';

use \Vechiles\Parts\Engine;

class V84MS extends Engine {

    /**
     * Class constructor
     */
    public function __construct(){
        parent::__construct(840, 3500);
    }

    /**
     * Turns HoneywellAGT1500 object instance into a string
     */
    public function toString(){
        return 'V84MS V-12 Diesel Fuel Tank Engine. ' . parent::toString();
    }
}

?>