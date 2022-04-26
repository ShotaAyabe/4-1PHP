<?php
//animal.phpと同じ内容

    class Cat {
        public $cry = "ニャーニャー";
        
        function bow() {
            echo $this->cry . PHP_EOL;
        }
    }



?>