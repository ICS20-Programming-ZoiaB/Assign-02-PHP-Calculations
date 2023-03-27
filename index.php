<!DOCTYPE html>
<html>
  <head>

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Calculate Your Average and Range, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_index/android-chrome-512x512.png">
    <link rel="manifest" href="./favicon_index/android-chrome-512x512.png">

    <!-- Stylesheet and MDL theme-->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title -->
    <title>Calculate Your Average and Range, with PHP</title>
  </head>
  <body>

    <!-- Link to JavaScript -->
    <script src="./js/script.js"></script>
    
    <!-- Main components -->
    <center>
    <?php echo "<h1>Calculate Your Average and Range, with PHP</h1>" ?>
    <?php echo "<p>" ?>
    <?php echo "<h3>Would you like to find out the average and range of your 2 test scores? If so, please enter the following:</h3>" ?>

      <!-- User input -->
        <form action="./results.php" method="post" target="results">
        <label for="test1">Test 1 Score %</label>
        <input type="number" id="test1" name="test1" step="0.001" placeholder="Test 1 Score..."><br><br>
        <label for="test2">Test 2 Score %</label>
        <input type="number" id="test2" name="test2" step="0.001" placeholder="Test 2 Score..."><br><br>
        <input type="submit" value="Enter">
        </form>
    </p>

    <!-- Image -->
    <img src = "./images/mathwriting.jpg" width="400" length="400">
      
    <!-- Create a space where the user information will be displayed -->
    <iframe id="results" name="results"></iframe>

      <!-- Small text -->
      <p>Here are some school supplies you may want to bring to class:</p>
      
    <!-- Google's MDL Simple List -->
    <ul class="demo-list-item mdl-list">
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
          Laptop
        </span>
      </li>
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
          Pencils
        </span>
      </li>
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
          Paper
        </span>
      </li>
    </ul>
    </center>
  </body>
</html>
