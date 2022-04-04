<?php
    class Calculator {

        public $number1 ;
        public $number2 ;
        public $result ;

        public function sum($a, $b){
            $this->number1 = $a;
            $this->number2 = $b;
            return $this->result = $this->number1 + $this->number2;
        }
        public function sub($a, $b){
            $this->number1 = $a;
            $this->number2 = $b;
            return $this->result = $this->number1 - $this->number2;

        }
        public function mul($a, $b){
            $this->number1 = $a;
            $this->number2 = $b;
            return $this->result = $this->number1 * $this->number2;

        }
        public function div($a, $b){
            $this->number1 = $a;
            $this->number2 = $b;
            return $this->result = $this->number1 /  $this->number2;

        }
        public function mod($a, $b){

            $this->number1 = $a;
            $this->number2 = $b;
            return $this->result = $this->number1 % $this->number2;

        }
    }


