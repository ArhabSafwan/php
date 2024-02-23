<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class car
    {
        public $model;
        public $color;
        public function __construct($model, $color)
        {
            $this->model = $model;
            $this->color = $color;
        }
    }

    $mycar = new car('bmw', 'red');

    foreach ($mycar as $key => $value) {
        echo "my car $key is $value<br>";
    }
    ?>
</body>

</html>