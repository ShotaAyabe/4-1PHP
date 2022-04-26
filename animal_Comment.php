<?php
/*
→→→→
class内で宣言した変数を使う場合は
$this->変数名と呼び出すと使用することができる。
この場合は$が必要ない。(★)
*/

/*
＜Animalクラスを宣言する＞
1
Animalクラスを宣言する
2
Animalクラスにプロパティ$cryを追加し
「bownow!」という文字列を代入する。
3
Animalクラスで鳴く「bow」というクラス関数を作成する。
*/


//Animalクラスを宣言する
    class Animal {
        public $cry = "bowbow!";
        
        function bow() {
            echo $this->cry . PHP_EOL;
                //(★)
                //A1
                
        }
    }
    
    /*
    ＜Animalクラスを継承させる＞
    1a
    Animalクラスを継承したDogクラスを宣言する
    2b
    Dogクラスをインスタンス化し、bow()を呼び出す
                ↓↓↓↓↓↓↓                                  */  
    //1a
    class Dog extends Animal {
        public $cry = "わんわん！";
    }
    
    /*
    $animal_1 = new Animal();
    //B1                      */
    
    //　↑　2bのために書き換える　↓
    $animal_1 = new Dog();

    $animal_1->bow();
    //C1
    
    
/* ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

＜Animalクラスのインスタンス化＞
A1
bow関数でプロパティ$cryを出力するようにする
$thisを使う
B1
$animal_1というインスタンス名で
Animalクラスのインスタンスを作成
C1
$animal_1のbow()メソッドを呼び出す
*/

//試しに追記
    class Cat extends Animal {
        public $cry = "ニャーニャー";
    }
    $animal_1 = new Cat();

    $animal_1->bow();


?>