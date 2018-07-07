<?php 

namespace Battlefield;

class Battlefield {

    private $tanks;

    /**
     * Class constructor
     */
    public function __construct(){
        $this->tanks = array();
    }

    /**
     * Adds a tank to the battlefield
     */
    public function addTank($tank){
        array_push($this->tanks, $tank);
        return $tank;
    }

    /**
     * Updates the state of the battlefield and causes all tanks to operate
     */
    public function update(){
        // if there are less than 2 tanks remaining, there is no point in simulating the battle
        if(count($this->tanks) < 2){
            echo 'There are ' . count($this->tanks) . ' tank(-s) left on the battlefield!</br>';
            echo 'There is no need to simulate the battle anymore!</br>';
            return false;
        }

        // there are at least 2 tanks left, update the battlefield state
        for($i = 0; $i < count($this->tanks); $i++){
            $tank1 = $this->tanks[$i];

            for($j = 0; $j < count($this->tanks); $j++){
                $tank2 = $this->tanks[$j];

                if($i != $j && $tank1 != null && $tank2 != null){
                    echo 'Tank ' . $tank1->name . ' fires at Tank ' . $tank2->name . '...</br>';

                    if($tank1->turret->fire($tank2)){
                        echo 'Tank ' . $tank2->name . ' has been destroyed! </br>';
                        array_splice($this->tanks, $j, 1);

                        if($j < $i){
                            $i--;
                        }
                    }else{
                        echo 'Tank ' . $tank2->name . ' survived! </br>';
                    }

                    break;
                }
            }
        }

        return true;
    }
}

?>