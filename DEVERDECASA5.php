<? php
class Quadrado {
    private $lado;

    
    public function setLado($lado) {
        if ($lado > 0) {
            $this->lado = $lado;
        }
    }

    
    public function calculaArea() {
        return $this->lado * $this->lado;
    }
}


$quadrado = new Quadrado();
$quadrado->setLado(5); 
$area = $quadrado->calculaArea(); 
echo "Área do quadrado: " . $area; 
?>
