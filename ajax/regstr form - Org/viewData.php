<!DOCTYPE html>

<html lang="en">

<head>
  <title>Registraion Form</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fonts/bootstrap.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="style.css" />
</head>

<!DOCTYPE html>
<?php

     error_reporting(0);

     $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    
     $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);

       
     $statement = $pdo->prepare("select * from participants");
     $successQry = $statement->execute();
     $result = $statement->fetchAll();
  
     //var_dump ($result[0] ['name']) ;
   
?>


  <body>
    <div class="container-fluid">


      <div class="row my-2">
        <div class="col-md-2"></div>

      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <h4> Participants </h4>
        </div>

      </div>

      <div class="row my-2"></div>

      <div class="row">
        <div class="col-md-1">
          <label for="id"><h5>ID</h5></label>
        </div>
        <div class="col-md-1">
          <label for="name"><h5>Name</h5></label>
        </div>
        <div class="col-md-2">
          <label for="Email"><h5>Email</h5></label>
        </div>
        <div class="col-md-2">
          <label for="Occupation"><h5>Occupation</h5></label>
        </div>
        <div class="col-md-1">
          <label for="Mobile"><h5>Mobile</h5></label>
        </div>
        <div class="col-md-1">
          <label for="Gender"><h5>Gender</h5></label>
        </div>
        <div class="col-md-2">
          <label for="Address"><h5>Address</h5></label>
        </div>
      </div>

      <div class="row my-2"></div>

      <?php
     for($i=0; $i < sizeof($result); $i++)
     {      
  ?>
        <div class="row">
          <div class="col-md-1">
            <label for="id">
                <?php 
                    echo ($result[$i] ['id'])."<br>" ;
                ?>
              </label>
          </div>
          <div class="col-md-1">
            <label for="name" id="name">
                <?php 
                    echo ($result[$i] ['name'])."<br>" ;
                ?>
              </label>
          </div>
          <div class="col-md-2">
            <label for="Email" id="email"><?php 
                    echo ($result[$i] ['email'])."<br>" ;
                ?>
              </label>
          </div>
          <div class="col-md-2">
            <label for="Occupation" id="occupation"><?php 
                    echo ($result[$i] ['occupation'])."<br>" ;
                ?>
              </label>
          </div>
          <div class="col-md-1">
            <label for="Mobile" id="mobile"><?php 
                    echo ($result[$i] ['mobile'])."<br>" ;
                ?>
              </label>
          </div>
          <div class="col-md-1">
            <label for="Gender" id="gender"><?php 
                    echo ($result[$i] ['gender'])."<br>" ;
                ?>
              </label>
          </div>
          <div class="col-md-2">
            <label for="Address" id="address">
                <?php 
                    echo ($result[$i] ['address'])."<br>" ;
                ?>
              </label>
          </div>

          <div class="col-md-1">

            <a href="edit.php?id=<?php echo ($result[$i]['id']);?>">
              <h6>Edit</h6>
            </a>

            <?php $participant_Id = ($result[$i]['id']);?>

          </div>

          <div class="col-md-1">
            <!--
            <a href="delete.php?id=<?php //echo ($result[$i]['id']);?>">
              <h6>Delete</h6>
            </a>
-->
            <button class="button" onclick="deleteData(<?php echo $participant_Id;?>)" type="button">Delete</button>

          </div>

        </div>
        <div class="row my-1"></div>

        <script type="text/javascript">
          function deleteData(participant_Id) {
            console.log("ID: " + participant_Id);
            var data = {
              id1: participant_Id

            }


            $.ajax({
              url: 'delete.php',
              data: data,
              method: 'POST',
              success: deletesuccessCallBack,
              error: deleteerrorCallBack
            });

          }

          function deletesuccessCallBack(Val) {
            console.log("Deleted Data for ID : " + Val);
            //            if (result == 'Edited') {
            //              window.location = "viewData.php";
            //            }
          }

          function deleteerrorCallBack() {
            console.log("nope");
          }

        </script>

        <?php
        } 
        
      ?>


    </div>




  </body>

</html>
