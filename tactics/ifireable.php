<?php

namespace Tactics;

interface IFireable {

    /**
     * Fires to a target vechile
     * @param target - vechile to shoot at
     */
    public function fire($target);
}

?>