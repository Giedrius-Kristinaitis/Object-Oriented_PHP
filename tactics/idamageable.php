<?php

namespace Tactics;

interface IDamageable {

    /**
     * Reiceives damage
     * @param ammount - how much damage was dealt
     */
    public function receiveDamage($ammount);
}

?>