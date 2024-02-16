<?php

use PHPUnit\Framework\TestCase;

require_once 'src/ShoppingList.php';

class ShoppingListTest extends TestCase {
    public function testAddItem() { //verificar se item foi adicionado na lista
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('pera');
        $shoppingList->addItem('lasanha');
        $resultado = $shoppingList->getItems();
        $this->assertEquals(["pera", "lasanha"], $resultado);
    }

    public function testRemoveItem() { //verifica se o item foi removido da lista
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('pera');
        $shoppingList->addItem('caderno');
        $shoppingList->removeItem(0);
        $resultado = $shoppingList->getItems();
        $this->assertCount(1, $resultado);
        $this->assertEquals(['caderno'], $resultado);
    }

    public function testItemDuplicado() { //verifica se há itens dublicados na lista
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('pera');
        $shoppingList->addItem('pera');
        $resultado = $shoppingList->getItems();
        $this->assertCount(1, $resultado);
    }

    public function testRemover() { //teste de um item que não existe sendo removido
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('pera');
        $shoppingList->removeItem(3);
        $resultado = $shoppingList->getItems();
        $this->assertCount(1, $resultado);
        $this->assertEquals(['pera'], $resultado);
    }

    public function testRemoverTudo() { //teste de todos os item sendo removido
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('pera');
        $shoppingList->addItem('lentilha');
        $shoppingList->addItem('caderno');
        $shoppingList->clearItems();
        $resultado = $shoppingList->getItems();
        $this->assertCount(0, $resultado);
        $this->assertEmpty($resultado);
    }
}
