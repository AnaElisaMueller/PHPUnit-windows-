<?php

class ShoppingList {

    public array $lista;

    public function __construct() {
        $this->lista = [];
    }

    public function addItem($item) {
        if (!in_array($item, $this->lista)) {
            $this->lista[] = $item;
        }
    }

    public function getItems() {
        return $this->lista;
    }

    public function removeItem($index) {
        if (isset($this->lista[$index])) {
            unset($this->lista[$index]);
            $this->lista = array_values($this->lista);
        }
    }

    public function clearItems() {
        $this->lista = [];
    }
}
