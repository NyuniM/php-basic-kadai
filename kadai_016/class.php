<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP kadai_016</title>
</head>

<body>
    <p>
        <?php

        // クラスを定義する
        class Food
        {
            private $name;
            private $price;

            // メソッドを定義する
            public function set_name(string $name)
            {
                $this->name = $name;
            }
            public function show_name()
            {
                echo $this->name . '：';
            }

            public function set_price(string $price)
            {
                $this->price = $price;
            }
            public function show_price()
            {
                echo '価格' . $this->price . '<br>';
            }
        }
        // インスタンス化する
        $potato = new Food();
        $potato->set_name('potato');
        $potato->set_price(250);
        // プロパティにアクセスし、値を出力する
        print_r($potato);


        // 改行する
        echo '<br>';


        // クラスを定義する
        class Animal
        {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function set_name(string $name)
            {
                $this->name = $name;
            }
            public function show_name()
            {
                echo $this->name . '：';
            }

            public function set_height(string $height)
            {
                $this->height = $height;
            }
            public function show_height()
            {
                echo '身長' . $this->height . ' ';
            }

            public function set_weight(string $weight)
            {
                $this->weight = $weight;
            }
            public function show_weight()
            {
                echo '体重' . $this->weight . '<br>';
            }
        }
        // インスタンス化する
        $dog = new Animal();
        $dog->set_name('dog');
        $dog->set_height(60);
        $dog->set_weight(5000);
        // プロパティにアクセスし、値を出力する
        print_r($dog);


        // 改行する
        echo '<br>';


        // メソッドにアクセスして実行する
        $potato->show_name();
        $potato->show_price();
        $dog->show_name();
        $dog->show_height();
        $dog->show_weight();
        ?>
    </p>
</body>

</html>