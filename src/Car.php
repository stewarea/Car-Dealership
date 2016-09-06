

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


  // $porsche->setPrice("1.44553");
  // $ford->setPrice("2.44585");
  // $mercedes->setPrice("3.44585");





?>
