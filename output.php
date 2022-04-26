/*
input.phpを読み込みましょう。
さらにinput.phpで定義した配列を表示するコードを
書いてください。
*/


<?php
//外部ファイルの読み込み 
require('input.php');
//配列の出力はprint_r()
print_r($numbers);


    for ( $i = 1; $i <= 100; $i++) {
        /*3でも5でも割り切れるので、先に書く*/
        if ( $i % 15 === 0) {
            echo "FizzBuzz";
        } elseif ( $i % 3 === 0) {
            echo "Fizz";
        } elseif ( $i % 5 === 0) {
            echo "Buzz";
        } else {
            echo $i;
        }
        echo PHP_EOL;
    }     
         
         
?>