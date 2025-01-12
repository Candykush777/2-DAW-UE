

    <?php

include_once 'vehiculo.php';


    
    Class Bicicleta extends Vehiculo{
        public $nMarchas;


    

    public function __construct($nombre,$nMarchas){

        parent::__construct($nombre);
        $this->nMarchas=$nMarchas;


    }
    public function hazCaballito(){

        return "Caballito....";
    }
    
}
    
    ?>
    
