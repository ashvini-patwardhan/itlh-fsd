<?php



?>





<!doctype html>
<html lang="en">

<head>
  <title>Registraion Form</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fonts/bootstrap.css">
  <script src="fonts/fontawesome.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container-fluid">

    <form method="post" action="update.php">
      <div class="row my-2">
        <div class="col-md-2"></div>

      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <h4> Registraion Form</h4>
        </div>

      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="name">Name:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="name" value="" placeholder="Name">
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="name">Email:</label>
        </div>
        <div class="col-md-7">
          <input type="email" name="email" value="" placeholder="Email">
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="occupation">Occupation:</label>
        </div>
        <div class="col-md-7">
          <select name="occupation">
                    <option value="private">Private</option>
                    <option value="govt">Government</option>
                    <option value="education">Education</option>
                    <option value="others">Others </option>                 
                </select>
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="mobile">Mobile:</label>
        </div>
        <div class="col-md-7">
          <input type="tel" name="mobile" value="" placeholder="Mobile">
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="gender">Gender:</label>
        </div>
        <div class="col-md-1">
          <input type="radio" name="gender" value="female" /> Female
        </div>
        <div class="col-md-1">
          <input type="radio" name="gender" value="male" /> Male
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="address">Address:</label>
        </div>
        <div class="col-md-7">
          <textarea name="address" id="" cols="30" rows="8" placeholder="Address"></textarea>
        </div>
      </div>

      <div class="row my-1"></div>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <button class="button" type="submit">Update</button>
        </div>

      </div>

      <div class="row my-2"></div>
    </form>

  </div>
</body>

</html>
