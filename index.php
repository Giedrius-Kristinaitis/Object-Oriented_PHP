<?php

require_once 'vechiles/tanks/m1a2abrams.php';
require_once 'vechiles/tanks/t90.php';
require_once 'battlefield/battlefield.php';

use Vechiles\Tanks\M1A2Abrams;
use Vechiles\Tanks\T90;
use Battlefield\Battlefield;

// add tanks to the battlefield
$battlefield = new Battlefield();
echo 'T90 tank as #1 has entered the battlefield: </br>' . $battlefield->addTank(new T90('#1'))->toString() . '</br>';
echo '</br>';
echo 'M1A2 Abrams tank as #2 has entered the battlefield: </br>' . $battlefield->addTank(new M1A2Abrams('#2'))->toString() . '</br>';

updateBattle($battlefield);

// add more tanks to the battle
echo 'M1A2 Abrams tank as #3 has entered the battlefield: </br>' . $battlefield->addTank(new M1A2Abrams('#3'))->toString() . '</br>';
echo '</br>';
echo 'T90 tank as #4 has entered the battlefield: </br>' . $battlefield->addTank(new T90('#4'))->toString() . '</br>';

updateBattle($battlefield);

// add one more tank and update the battle
echo 'M1A2 Abrams tank as #5 has entered the battlefield: </br>' . $battlefield->addTank(new M1A2Abrams('#5'))->toString() . '</br>';

updateBattle($battlefield);

/**
 * Updates the state of the battlefield
 */
function updateBattle($battlefield){
    // perform battlefield simulations
    do{
        echo '</br>';
        echo 'Performing battlefield operations...</br>';
    }while($battlefield->update());

    echo 'Battlefield simulation has finished</br></br>';
}

?>