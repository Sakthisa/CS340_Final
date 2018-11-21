<?php
  session_start();

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alcohol Connoisseur</title>

    <!-- This is a 3rd-party stylesheet to make available the font families to be used for this page. -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:100" rel="stylesheet">

    <!-- This is a 3rd-party stylesheet to include Font Awesome icons: http://fontawesome.io/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">

    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>

      <div class="header-image-container">
        <img src="cocktail.png" alt="cocktail" width="200" height="200">
      </div>

      <h1 class="site-title"><a href="#">Alcohol Connoisseur</a></h1>

    </header>

    <div class="navbar">
      <a href="index.php">Home</a>
      <div class="dropdown">
        <button class="dropbtn">Account
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="log-in.php">Log in</a>
          <a href="sign-up.php">Sign Up</a>
        </div>
      </div>
      <a href="Create-drink.php">Create Drink</a>
      <?php if(isset($_SESSION['username'])) : ?>
        <a style="float:right" id = "test">Welcome <?php echo $_SESSION['username']; ?></a>
        <a style="float:right" href="index.php?logout='1'">Logout</a>
      <?php endif ?>
      <a href="About.php">About</a>
    </div>

<div class = "Create_drink">
  <h1>Upload your drink</h1>
  <h3>Fill out the form below</h3>
    <form action = "create-drink.php" method = "post">
      <label for="fname">Title</label>
      <input type="text" id="fname" name="firstname" placeholder="Title" required>

      <label for="Description">Description</label>
      <textarea id="Description" name="Description" placeholder="Description (optional)"></textarea>

      <div id="Steps_Div">
        <label for="Steps">Steps</label>
        <br><br>
      </div>
      <input type="button" value="Add Step" onclick="step_add()">
      <input type="button" id = "removeStep" value="Remove Step" onclick="step_rem()">

      <br><br>
      <div id="Equipment_Div">
        <label for="Equipment">Equipment</label>
        <br><br>
      </div>
        <input type="button" value="Add Equipment" onclick="equip_add()">
        <input type="button" id = "removeEquip" value="Remove Equipment" onclick="equip_rem()">

      <br><br>
      <div id="Ingredients_Div">
        <label for="Ingredients">Ingredients</label>
        <br><br>
      </div>
        <input type="button" value="Add Ingredient" onclick="ingred_add()">
        <input type="button" id = "removeIngr" value="Remove Ingredient" onclick="ingred_rem()">

      <br><br>
      <label for="pic">Image</label>
      <input id = "pic" type="file" name="pic" accept="image/*" placeholder="image">

    <input type = "submit" value = "Submit">
</div>



  </body>

  <script src="drink.js" charset="utf-8"></script>
</html>