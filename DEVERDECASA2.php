<? php
class Adulto {
    
    private $peso;

    
    public function __construct($peso) {
        $this->peso = $peso;
    }

    
    public function engordar($quilos) {
        if ($quilos > 0) {
            $this->peso += $quilos;
        }
    }

    
    public function emagrecer($quilos) {
        if ($quilos > 0) {
            $this->peso -= $quilos;
            if ($this->peso < 0) {
                $this->peso = 0;
            }
        }
    }

    
    public function getPeso() {
        return $this->peso;
    }
}

/
$adulto = new Adulto(70); 
$adulto->engordar(5);     
$adulto->emagrecer(2);    
echo "Peso atual do adulto: " . $adulto->getPeso() . " kg"; 
?>