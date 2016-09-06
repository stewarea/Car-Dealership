

<?php
  class Car
  {
      public $make_model;
      public $price;
      public $miles;
      function __construct($car_model, $car_price, $car_miles)
      {
          $this->make_model = $car_model;
          $this->price = $car_price;
          $this->miles = $car_miles;
      }
      function setPrice($new_price)
      {
        $float_price = (float) $new_price;
        if ($float_price != 0) {
          $formatted_price = number_format($float_price, 2);
          $this->price = $formatted_price;
        }
      }
      // function getPrice()
      // {
      //   return $this->price;
      // }
  }

  $porsche = new Car("2014 Porsche 911", 114991, 7864);
  $ford = new Car("2011 Ford F450", 55995, 14241);
  $lexus = new Car("2013 Lexus RX 350", 44700, 20000);
  $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);
  // $porsche->setPrice("1.44553");
  // $ford->setPrice("2.44585");
  // $mercedes->setPrice("3.44585");





?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                // $car_price = $car->getPrice();
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
