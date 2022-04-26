<?php
$input_number = $argv[1];
/*　0はファイル名なので、それ以降の1を指定して
  　コマンド引数を受け取る　　　　　　　　　　*/

if ( $input_number % 2 == 0 ){
    echo $input_number . "は偶数です" . PHP_EOL;
}else{
    echo $input_number . "は奇数です" . PHP_EOL;
}
/*  $argv[1]で取得した値を2で割り、
    余りをif文で判断して出力結果を出す。      */

?>