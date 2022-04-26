<?php
//animal.phpと同じ内容

class Dog {
    public $cry = "わんわん";

    function bow() {
        echo $this->cry . PHP_EOL;
    }
}
?>