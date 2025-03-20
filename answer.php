<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Volume of Cuboid Calculation, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>The Volume of Cuboid Calculation, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Volume of Cuboid Calculation, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/volume-of-cuboid.png" alt="volume of cuboid image" width="500" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $lengthOfCuboid = $_GET["length"];
          $widthOfCuboid = $_GET["width"];
          $heightOfCuboid = $_GET["height"];
          // process
          $volume = $lengthOfCuboid * $widthOfCuboid * $heightOfCuboid;
          // output
          echo "If your cuboid has the length = " . $lengthOfCuboid . " cm, the width = " . $widthOfCuboid . " cm, and the height = " . $heightOfCuboid . " cm :";
          echo "<br />";
          echo "<br />";
          echo "The volume of a cuboid is " . $volume . " cm³.";
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>
