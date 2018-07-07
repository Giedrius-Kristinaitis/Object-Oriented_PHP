<?php 

namespace Vechiles;

abstract class Tank {

    private $engine;
    private $turret;
    private $armor;
    private $name;

    /**
     * Class constructor
     */
    public function __construct($name, $engine, $turret, $armor){
        $this->name = $name;
        $this->engine = $engine;
        $this->armor = $armor;
        $this->turret = $turret;
    }

    /**
     * Magic getter method
     * @param property name of the property to get
     * @return value of the given property
     */
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    /**
     * Magic setter method
     * @param property name of the property to set
     * @param value value to assign to the property
     */
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }
}

?>