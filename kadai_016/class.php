<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function show_price() {
                echo $this->price . '<br>';
            }

            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function show_height() {
                echo $this->height . '<br>';
            }

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        $potato = new Food('potato', 250);

        print_r($potato);
        echo '<br>';


        $dog = new Animal('dog', 60, 5000);

        print_r($dog);
        echo '<br>';


        $potato->show_price(250);


        $dog->show_height(5000);
        ?>
    </p>
</body>
</html>