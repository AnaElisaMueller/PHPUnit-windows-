<?php

use PHPUnit\Framework\TestCase;

require_once 'src/StringManipulator.php';

class StringManipulatorTest extends TestCase {

    public function testCapitalizeString() { //verifica se retorna string em branca
        $stringManipulator = new StringManipulator();
        $stringManipulator->capitalizeString(" ");
        $resultado = $stringManipulator->returnString();
        $this->assertEquals(" ", $resultado);
    }

    public function testContenateStrings() { //verifica strings contatenadas com espaço
        $stringManipulator = new StringManipulator();
        $stringManipulator->concatenateStrings("string com espaços/", "string com espaços");
        $resultado = $stringManipulator->returnString();
        $this->assertEquals("string com espaços/string com espaços", $resultado);
    }

    public function testCountVowels() { //verifica quantidade de vogais em string
        $stringManipulator = new StringManipulator();
        $resultado1 = $stringManipulator->countVowels("string com vogais");
        $resultado2 = $stringManipulator->countVowels("strIng cOm vOgAIs");
        $resultado3 = $stringManipulator->countVowels("php");
        $this->assertEquals(5, $resultado1);
        $this->assertEquals(5, $resultado2);
        $this->assertEquals(0, $resultado3);
    }

}
