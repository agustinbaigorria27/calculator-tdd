<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
  public function testAddWillReturnTheSumsOfItsParameters() {
    $sut = new Calculator();

    $this->assertEquals(8 ,$sut->add(5,3));
    $this->assertEquals(5 ,$sut->add(5,0));
  }

  public function testRestWillReturnTheRestOfItsParameters() {
    $sut = new Calculator;

    $this->assertEquals(10 ,$sut->rest(15,5));
    $this->assertEquals(15 ,$sut->rest(25,10));
  }

  public function testMultiplicationWillReturnTheMultiplicationOfItsParameters() {
    $sut = new Calculator;

    $this->assertEquals(75 ,$sut->multiplication(15,5));
    $this->assertEquals(250 ,$sut->multiplication(25,10));
  }
}