
    <?php
    include_once 'vehiculo.php';
    
    class Coche extends Vehiculo{

        public $cilindrada;


        public function __construct($nombre,$cilindrada)
        {
            parent::__construct($nombre);
            $this->cilindrada=$cilindrada;

            
        }

public function quemaRueda(){

    return "Ruedasss quemadas con mi coche: " .$this->getNombre()." de cilindrada: ".$this->cilindrada. " cc";
}

public function getCilindrada(){

    return $this->cilindrada;
}

    }
    
    ?>
    
