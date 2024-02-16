<?php

class StringManipulator {

    public string $string;

    public function __construct() {
        $this->string = '';
    }

    public function capitalizeString($string) {
        $this->string = ucwords(strtolower($string));
    }

    public function returnString() {
        return $this->string;
    }

    public function concatenateStrings($string1, $string2) {
        $this->string = $string1 . $string2;
    }

    public function countVowels($string) {
        $string = strtolower($string);
        $contador =0;
        for ($letra = 0; $letra < strlen($string); $letra++) {
            if (in_array($string[$letra], ['a', 'e', 'i', 'o', 'u'])) {
                $contador++;
            }
        }
        return $contador;
    }

}
