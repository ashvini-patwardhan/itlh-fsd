<?php

  $id = $_GET['id'];

  $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
  $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);
  $statement1 = $pdo->prepare("Select * from participants where id=$id");
  $successQry1 = $statement1->execute();
  $result = $statement1->fetchAll();
  //var_dump ($result) ;
  $php_gender = $result[0]['gender'];
  $php_occupation = $result[0]['occupation']; 
 
?>

  <!doctype html>
  <html lang="en">

  <head>
    <title>Registraion Form</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/bootstrap.css">
    <!--    <script src="fonts/fontawesome.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container-fluid">

      <!--      <form method="post" action="update.php?id=<?php echo ($result[0]['id']);?> ">-->

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
          <input type="text" name="name" id="name" value="<?php 
                    echo ($result[0] ['name']);
                ?>" placeholder="Name">
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="name">Email:</label>
        </div>
        <div class="col-md-7">
          <input type="email" name="email" id="email" value="<?php 
                    echo ($result[0] ['email']);
                ?>" placeholder="Email">
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="occupation">Occupation:</label>
        </div>
        <div class="col-md-7">
          <select name="occupation" id="occupation">
                    <option value="private">private</option>
                    <option value="government">government</option>
                    <option value="education">education</option>
                    <option value="others">others</option>                 
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
          <input type="tel" name="mobile" id="mobile" value="<?php 
                    echo ($result[0] ['mobile']);
                ?>" placeholder="Mobile">
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="gender">Gender:</label>
        </div>
        <div class="col-md-1">
          <input type="radio" name="gender" id="f" value="female" /> Female
        </div>
        <div class="col-md-1">
          <input type="radio" name="gender" id="m" value="male" /> Male
        </div>
      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <label for="address">Address:</label>
        </div>
        <div class="col-md-7">
          <textarea name="address" id="address" cols="30" rows="8" placeholder="Address"><?php 
                    echo ($result[0] ['address']);
                ?></textarea>
        </div>
      </div>

      <div class="row my-1"></div>

      <?php $participant_Id = $id;?>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <button class="button" type="submit" onclick="updateData(<?php echo $participant_Id;?>)">Update</button>

          <!--  <a href="Update.php?id=<?php //echo ($result[$i]['id']);?>" class="btn btn-info" role="button">Update</a>-->
        </div>

      </div>

      <div class="row my-2"></div>

      <!--      </form>-->
    </div>

  </body>

  <script type="text/javascript">
    var gender = "<?=$php_gender ?>";
    console.log("The Entered gender is : " + gender);

    if (gender == 'female') {
      document.getElementById("f").checked = true;
    } else if (gender == 'male') {
      document.getElementById("m").checked = true;
    }

    var occupation = "<?=$php_occupation ?>";
    console.log(occupation);

    document.getElementById("selOccupation").value = "<?=$php_occupation ?>";

    function updateData(participant_Id) {
      var data = {
        id: participant_Id,
        name: document.querySelector('#name').value,
        email: document.querySelector('#email').value,
        occupation: document.querySelector('#occupation').value,
        mobile: document.querySelector('#mobile').value,
        gender: document.querySelector('input[name="gender"]:checked').value,
        address: document.querySelector('#address').value
      }

      $.ajax({
        url: 'update.php',
        data: data,
        method: 'POST',
        success: successCallBack,
        error: errorCallBack
      });

    }

    function successCallBack(result) {
      //console.log("done: " + result);
      if (result == 'updated') {
        window.location = "viewData.php";
      }
    }

    function errorCallBack() {
      console.log("nope");
    }

  </script>

  </html>
