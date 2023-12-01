<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // Foodクラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
            public function show_price() {
                echo $this->price . '<br>';
            }
        }
            // インスタンス化する
            $food = new Food('potato', 250);

            print_r($food);
        ?>
    </p>
    <p>
        <?php
        // Animalクラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height =$height;
                $this->weight =$weight;
            }

            // メソッドを定義する
            public function show_height() {
                echo $this->height . '<br>';
            }
        }
            // インスタンス化する
            $animal = new Animal('dog', 60, 5000);
            print_r($animal);
        ?>
    </p>
    <p>
        <?php
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>
</html>
