<!DOCTYPE html>

<html lang="en">

<head>
  <title>Registraion Form</title>
  <link rel="stylesheet" href="bootstrap.css">

  <link rel="stylesheet" href="fonts/bootstrap.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="style.css" />

  <script type="text/javascript">
    $(document).ready(function() {
      //console.log("ID: " + participant_Id);
      var data = {
        id1: 1

      }

      $.ajax({
        url: 'viewDataApi.php',
        data: data,
        method: 'POST',
        success: successCallBack,
        error: errorCallBack
      });

    });

    function successCallBack(Val) {
      var x, i;
      var myJSON = JSON.parse(Val);

      for (i = 0; i < myJSON.length; i++) {
        //for (i in myJSON) {
        x = myJSON[i].name;
        // console.log("Name of All Participants : " + myJSON + "\n");
        document.getElementById("id").innerHTML += myJSON[i].id + "<br><br>";
        document.getElementById("name").innerHTML += myJSON[i].name + "<br><br>";
        document.getElementById("email").innerHTML += myJSON[i].email + "<br><br>";
        document.getElementById("occupation").innerHTML += myJSON[i].occupation + "<br><br>";
        document.getElementById("mobile").innerHTML += myJSON[i].mobile + "<br><br>";
        document.getElementById("gender").innerHTML += myJSON[i].gender + "<br><br>";
        document.getElementById("address").innerHTML += myJSON[i].address + "<br><br>";

        // $('#edit').append("<a href='edit.php?id=myJSON[i].id'><h6> Edit </h6> </a><br>");
        document.getElementById("edit").innerHTML += "<a href='edit.php?id=" + myJSON[i].id + "'><h6> Edit </h6> </a><br>";

        document.getElementById("del").innerHTML += "<button class='button' onclick='deleteData(" + myJSON[i].id + ")' type='button'>Delete</button>" + "<br><br>";
      }
    }

    function errorCallBack() {
      console.log("nope");
    }

  </script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row my-2">
      <div class="col-md-2"></div>

    </div>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h4> Participants </h4>
      </div>

    </div>

    <div class="row my-2"></div>

    <div class="row">
      <div class="col-md-1">
        <label class="text-md-left" for="id"><h6>ID</h6></label>
      </div>
      <div class="col-md-2">
        <label class="text-md-left" for="name"><h6>Name</h6></label>
      </div>
      <div class="col-md-2">
        <label class="text-md-left" for="Email"><h6>Email</h6></label>
      </div>
      <div class="col-md-1">
        <label class="text-md-left" for="Occupation"><h6>Occupation</h6></label>
      </div>
      <div class="col-md-1 ">
        <label class="text-md-left" for="Mobile"><h6>Mobile</h6></label>
      </div>
      <div class="col-md-1">
        <label class="text-md-left" for="Gender"><h6>Gender</h6></label>
      </div>
      <div class="col-md-2">
        <label class="text-md-left" for="Address"><h6>Address</h6></label>
      </div>
    </div>

    <div class="row my-2"></div>

    <?php
//     for($i=0; $i < sizeof($result); $i++)
//     {      
  ?>
      <div class="row">
        <div class="col-md-1 my-3">
          <label for="id" id="id">
               
          </label>
        </div>
        <div class="col-md-2 my-3">
          <label class="text-md-left" for="name" id="name">
    
              </label>
        </div>
        <div class="col-md-2 my-3">
          <label class="text-md-left" for="Email" id="email">
              </label>
        </div>
        <div class="col-md-1 my-3">
          <label class="text-md-left" for="Occupation" id="occupation">
              </label>
        </div>
        <div class="col-md-1 my-3">
          <label class="text-md-left" for="Mobile" id="mobile">
              </label>
        </div>
        <div class="col-md-1 my-3">
          <label class="text-md-left" for="Gender" id="gender">
              </label>
        </div>
        <div class="col-md-2 my-3">
          <label class="text-md-left" for="Address" id="address">
               
              </label>
        </div>

        <div class="col-md-1 my-2" id="edit">

          <!--  <a href="edit.php?id=<?php //echo ($result[$i]['id']);?>">
            <h6>Edit</h6>
          </a>  -->

          <?php //$participant_Id = ($result[$i]['id']);?>

        </div>

        <div class="col-md-1" id="del">
          <!--
            <a href="delete.php?id=<?php //echo ($result[$i]['id']);?>">
              <h6>Delete</h6>
            </a>
-->
          <!--          <button class="button" onclick="deleteData(<?php //echo $participant_Id;?>)" type="button">Delete</button>-->

        </div>

      </div>
      <div class="row my-1"></div>
  </div>

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


</body>

</html>
