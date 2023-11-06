<!DOCTYPE>
<html la="ja">
    <head>
        <meta charset="UTF-8">
        <title>クラスを作ってそれぞれのインスタンスを出力しよう</title>
    </head>
    <body>
        <p>
            <?php
            // Foodクラスの作成
                class Food {
                    // プロパティの定義
                    private $name;
                    private $price;
                    // メソッドの作成
                    public function show_price(){
                        echo $this->price.'<br>';
                    }
                    // コンストラクタの作成
                    public function __construct(string $name,int $price){
                        $this->name = $name;
                        $this->price = $price;
                    }

                }
                // Animalクラスの作成
                class Animal {
                    // プロパティの定義
                    private $name;
                    private $height;
                    private $weight;
                    // メソッドの作成
                    public function show_height(){
                    echo $this->height.'<br>';
                    }
                    // コンストラクタの作成
                    public function __construct(string $name,int $height,int $weight){
                        $this->name = $name;
                        $this->height = $height;
                        $this->weight = $weight;
                    }
                }


                // インスタンス化
                $coffee = new Food('coffee',450);
                $cat =new Animal('cat',500,500);
                // 各インスタンスのプロパティ表示
                print_r($coffee);
                echo '<br>';
                print_r($cat);
                echo '<br>';
                // メソッドへのアクセス
                $coffee->show_price();
                $cat->show_height();
            ?>
        </p>
    </body>
</html>