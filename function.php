<?php
    //関数の定義
    //関数名　　    //引数には、この2つを渡す。
                    //下限値、上限値
function sum_number($min_num, $max_num) {
    $result = 0;    //初期値は0に
    //繰り返し文を使って、範囲内の値の合計値を出力する
    for ($i = $min_num; $i <= $max_num; $i++) {
        //↑カウンタ変数$iの初期値は引数の$min_numとする
        //繰り返しの条件は引数の$max_num以下とする
        //$iは1ずつ増えていく
        $result = $result + $i;
        //合計値である$resultに$iを足す
    }
    echo $result . PHP_EOL;
        //最後に$resultを出力する
}
    //関数に引数をもたせて、呼び出し
sum_number(1, 9)

?>