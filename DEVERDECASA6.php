<? php
class Triangulo {
    private $base;
    private $altura;

    
    public function setBase($base) {
        if ($base > 0) {
            $this->base = $base;
        }
    }

    
    public function setAltura($altura) {
        if ($altura > 0) {
            $this->altura = $altura;
        }
    }

    
    public function calculaArea() {
        return (0.5 * $this->base * $this->altura);
    }
}


$triangulo = new Triangulo();
$triangulo->setBase(6); 
$triangulo->setAltura(4); 
$area = $triangulo->calculaArea(); 
echo "Área do triângulo: " . $area; 
?>