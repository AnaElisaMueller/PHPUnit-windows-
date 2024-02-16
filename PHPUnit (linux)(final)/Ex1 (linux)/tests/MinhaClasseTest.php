<?php 

use PHPUnit\Framework\TestCase;

require_once 'src/MinhaClasse.php';

class MinhaClasseTest extends TestCase {
    public function testSoma() {//se retorna um valor de soma positiva
        $minhaClasse = new MinhaClasse();
        $resultado = $minhaClasse->somar(2, 3);
        $this->assertEquals(5, $resultado);
    }

    public function testSomaNegativa() { //se retorna um valor de soma negativa
        $minhaClasse = new MinhaClasse();
        $resultado = $minhaClasse->somar(-2, -3);
        $this->assertEquals(-5, $resultado);
    } 

    public function testSomaNegativaPositiva() { //se retorna um valor de soma negativa e positiva
        $minhaClasse = new MinhaClasse();
        $resultado = $minhaClasse->somar(-2, 3);
        $this->assertEquals(1, $resultado);
    } 

    public function testSomaC() { //se retorna um valor de soma positiva com 0
        $minhaClasse = new MinhaClasse();
        $resultado = $minhaClasse->somar(0, 3);
        $this->assertEquals(3, $resultado);
    } 

    public function testSomaCC() {//se retorna um valor negativo
        $minhaClasse = new MinhaClasse();
        $resultado = $minhaClasse->somar(0, -3);
        $this->assertEquals(-3, $resultado);
    } 

    public function testSomaZero() {//se retorna um valor negativo
        $minhaClasse = new MinhaClasse();
        $resultado = $minhaClasse->somar(0, 0);
        $this->assertEquals(0, $resultado);
    } 

    public function testMaisSoma() {//se retorna corretamente a soma de dois valores
        $minhaClasse = new MinhaClasse();
        $soma1 = $minhaClasse->somar(-1, -5);
        $soma2 = $minhaClasse->somar(5, 0);
        $resultado = $soma1 + $soma2;
        $this->assertEquals(-1, $resultado);
    } 

}
?>