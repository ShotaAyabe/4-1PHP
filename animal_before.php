<?php
/*
クラスの宣言
今回は以下の形で宣言。

・Animalというクラス名
・bowという関数
・$cryというbowbow!という文字列が入っている変数

Animalクラス内で$cry変数とbow関数を宣言し、
newを用いて$animal_1という変数にインスタンスを入れている。
インスタンスを生成したあと、
クラス内で宣言している関数を呼び出す場合->を用いて
関数を呼び出すことができる。

下記のコードでは$cryを使用していないので
変数を使うようにする。
→→→→「animal.php」へ。

*/


    // クラスの宣言
    class Animal {
        public $cry = "bowbow!";

        function bow() {
            echo "bowbow!" . PHP_EOL;
        }
    }

    // インスタンスの生成
    $animal_1 = new Animal();
    // インスタンスの使用
    $animal_1->bow();
?>