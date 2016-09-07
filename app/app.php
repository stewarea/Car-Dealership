<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Car.php";
    $app = new Silex\Application();

    $app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Find a Car</title>
        </head>
        <body>
            <div class='container'>
                <h1>Find a Car!</h1>
                <form action='Car.php'>
                    <div class='form-group'>
                        <label for='car_model'>Enter Model:</label>
                        <input id='car_model' name='car_model' class='form-control' type='text'>
                        <label for='car_price'>Enter Maximum Price:</label>
                        <input id='car_price' name='car_price' class='form-control' type='number'>
                        <label for='car_miles'>Enter Maximum Miles:</label>
                        <input id='car_miles' name='car_miles' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Submit</button>
                </form>
            </div>
        </body>
        </html>"
        ;
    });

    $app->get("car", function() {
      $porsche = new Car("2014 Porsche 911", 114991, 7864);
      $ford = new Car("2011 Ford F450", 55995, 14241);
      $lexus = new Car("2013 Lexus RX 350", 44700, 20000);
      $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);

      $cars = array($porsche, $ford, $lexus, $mercedes);

      $cars_matching_search = array();
      // foreach ($cars as $car) {
      //     if ($car->price < $_GET['car_price'])  {
      //         array_push($cars_matching_search, $car);
      //       }
      //     }
      // foreach ($cars as $car) {
      //     if ($car->make_model == $_GET['car_model']) {
      //         array_push($cars_matching_search, $car);
      //     }
      //   }
      // foreach ($cars as $car) {
      //     if ($car->miles < $_GET['car_miles']) {
      //         array_push($cars_matching_search, $car);
      //     }
      //   }
      function worthBuying($max_price, $max_miles)
      {
          if ($this->price < ($max_price + 100) && $this->miles < $max_miles) {
              return true;
          } else {
              return false;
          }
      }

      $randomName = "<!DOCTYPE html>
      <html>
      <head>
          <title>Your Car Dealership's Homepage</title>
      </head>
      <body>
          <h1>Your Car Dealership</h1>
          <ul>";
      if (empty($cars_matching_search)) {
          $randomName = $randomName."Enter a higher number.";
      }

      foreach ($cars_matching_search as $car) {

          $randomName = $randomName."<li>".$car->getMAkeModel()."</li>".
              "<ul>"
                    "<li> $car->make_model </li>";
                    "<li> $$car->price </li>";
                    "<li> Miles: $car->miles </li>";
              "</ul>";
        }
        $randomName = $randomName."</ul>

      </body>
      </html>"


    return $randomName;
  }):

    return $app;
?>
