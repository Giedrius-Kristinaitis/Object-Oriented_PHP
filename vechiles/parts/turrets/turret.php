<?php

namespace Vechiles\Parts;

require_once __DIR__ . '/../../../tactics/ifireable.php';

use Tactics\IFireable;

abstract class Turret implements IFireable {

    private $power;
    private $firing_rate;
    private $range;

    /**
     * Class constructor
     * @param power - firepower
     * @param rate - firing rate
     * @param range - range of the ruttet
     */
    public function __construct($power, $rate, $range){
        $this->power = $power;
        $this->firing_rate = $rate;
        $this->range = $range;
    }

    /**
     * Fires to a target vechile
     * @param target - vechile to shoot at
     * @return boolean true if the target was destroyed, false otherwise
     */
    public function fire($target){
        return $target->armor->receiveDamage($this->power);
    }

    /**
     * Turns Turret object instance into a string
     */
    public function toString(){
        return 'Firepower: ' . $this->power . ', Firing rate: ' . $this->firing_rate . ' shots per minute, Range: ' . $this->range . ' km';
    }
}

?>