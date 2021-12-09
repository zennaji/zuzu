<?php 

class Product{
    public $id;
    public $naa;
    public $hoeveelheid;

    public function __construct()
    {
        settype($this->id, 'integer');
    }

}


?>