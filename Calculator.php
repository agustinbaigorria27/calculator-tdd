<?php

class Calculator {
  public function add(int $a,int $b) : int {
    return $a + $b;
  }

  public function rest(int $a, int $b) : int {
    return $a - $b;
  }

  public function multiplication(int $a, int $b) : int {
    return $a * $b;
  }
}