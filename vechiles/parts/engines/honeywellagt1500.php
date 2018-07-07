<?php

namespace Vechiles\Parts\Engines;

require_once 'engine.php';

use \Vechiles\Parts\Engine;

class HoneywellAGT1500 extends Engine {

    /**
     * Class constructor
     */
    public function __construct(){
        parent::__construct(1500, 5355);
    }

    /**
     * Turns HoneywellAGT1500 object instance into a string
     */
    public function toString(){
        return 'HoneywellAGT1500 Tank Engine. ' . parent::toString();
    }
}

?>