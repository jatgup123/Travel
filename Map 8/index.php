<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Map</title>
    <script
      src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
      type="text/javascript"
    ></script>
    <script
      src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
      type="text/javascript"
      charset="utf-8"
    ></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/credentials.js"></script>
  </head>
  <body>
    <h1 style="text-align: center">#Map</h1>

    <div
      id="mapContainer"
      style="
        margin: auto;
        width: 80vw;
        height: 80vh;
      "
    ></div>
  </body>
  <script type="text/javascript" src="js/map.js"></script>
</html>
