<?php
    class Car {
        public $speed;
        public $number;
        
        function _construct() {
            echo "インスタンス生成<br>";
        }

        function drive() {
            echo "「{$this->number}」が{$this->speed}㎞/hで走行<br>";
        }

        function stop() {
            echo "「{$this->number}」が停車<br>";
            $this->speed = 0;
        } 
    }
?>