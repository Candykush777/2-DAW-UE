
    <?php 
    
    class Vehiculo{
        public  $nombre;
        public static $kms_totales = 0;
        public static $vehiculos_Creados = 0;
    
    //insatancia 
    public $km_Recorridos;


  public function __construct($nombre)
  {
    $this->km_Recorridos = 0;
    self::$vehiculos_Creados++;
    $this->nombre=$nombre;
  
    
  }
  public static function getVehiculosCreados(){

    return "Los vehiculos creados son: " .self::$vehiculos_Creados ." vehiculos creados";
  }

  public static function getKMTotales(){

    return "Km totales de todos los vehiculos es:" .self::$kms_totales ." km";
  }

  public function getKmrecorridos(){

return "Los km recorridos por: " .$this->nombre. " son: " .$this->km_Recorridos. " km";
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function recorre($km){

    $this->km_Recorridos += $km;
    self::$kms_totales +=$km;
  }
    
    }
    ?>
    
