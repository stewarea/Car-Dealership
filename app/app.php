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

    $app->get("/Car.php", function() {
      $cars = array($porsche, $ford, $lexus, $mercedes);

      $cars_matching_search = array();
      foreach ($cars as $car) {
          if ($car->price < $_GET['car_price'])  {
              array_push($cars_matching_search, $car);
            }
          }
      foreach ($cars as $car) {
          if ($car->make_model == $_GET['car_model']) {
              array_push($cars_matching_search, $car);
          }
        }
      foreach ($cars as $car) {
          if ($car->miles < $_GET['car_miles']) {
              array_push($cars_matching_search, $car);
          }
        }
      });

  //   $app->get("/goodbye", function() {
  //     return "Goodbye friend!";
  // });

    return $app;
?>
