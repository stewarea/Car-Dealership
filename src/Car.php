

<?php
  class Car
  {
      private $make_model;
      private $price;
      private $miles;

      function __construct($car_model, $car_price, $car_miles)
      {
          $this->make_model = $car_model;
          $this->price = $car_price;
          $this->miles = $car_miles;
      }
      function worthBuying($max_price, $max_miles)
      {
          if ($this->price < ($max_price + 100) && $this->miles < $max_miles) {
              return true;
          } else {
              return false;
          }
      }
      function getMakeModel()
      {
          return $this->make_model;
      }
      function setMakeModel($makeModel)
      {
          $this->make_model = $makeModel;
      }
      function getPrice()
      {
          return $this->price;
      }
      function setPrice($inputPrice)
      {
          $this->price = $inputPrice;
      }
      function getMiles()
      {
          return $this->miles;
      }
      function setMiles($inputMiles)
      {
          $this->miles = $inputMiles;
      }
      function getPicture()
      {
          return $this->picture;
      }
      function setPicture($inputPicture)
      {
          $this->picture = $inputPicture;
      }
  }






?>
