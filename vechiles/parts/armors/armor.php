<?php

namespace Vechiles\Parts;

require_once __DIR__ . '/../../../tactics/idamageable.php';

use Tactics\IDamageable;

abstract class Armor implements IDamageable {

    private $hitpoints;

    /**
     * Class constructor
     * @param hp - hitpoints
     */
    public function __construct($hp){
        $this->hitpoints = $hp;
    }

    /**
     * Reiceives damage
     * @param integer ammount - how much damage was dealt
     * @return boolean true if the armor was destroyed, false otherwise
     */
    public function receiveDamage($ammount){
        $destroyed = $ammount >= $this->hitpoints ? true : false;
        $this->hitpoints -= $ammount;
        return $destroyed;
    }

    /**
     * Turns Armor object instance into a string
     */
    public function toString(){
        return 'Hitpoints: ' . $this->hitpoints . ' hitpoints';
    }
}

?>