<!doctype html>
<html lang="en">

<head>
    <title>Registraion Form</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/bootstrap.css">
    <!--  <script src="fonts/fontawesome.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container-fluid">


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
                <input type="text" name="name" id="name" value="" placeholder="Name">
            </div>
        </div>

        <div class="row my-2"></div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <label for="name">Email:</label>
            </div>
            <div class="col-md-7">
                <input type="email" name="email" id="email" value="" placeholder="Email">
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
                <input type="tel" name="mobile" id="mobile" value="" placeholder="Mobile">
            </div>
        </div>

        <div class="row my-2"></div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <label for="gender">Gender:</label>
            </div>
            <div class="col-md-1">
                <input type="radio" name="gender" id="gender1" value="female" /> Female
            </div>
            <div class="col-md-1">
                <input type="radio" name="gender" id="gender2" value="male" /> Male
            </div>
        </div>

        <div class="row my-2"></div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <label for="address">Address:</label>
            </div>
            <div class="col-md-7">
                <textarea name="address" id="address" cols="30" rows="8" placeholder="Address"></textarea>
            </div>
        </div>

        <div class="row my-1"></div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <button class="button" onclick="insertData()" type="button">Apply</button>
            </div>
        </div>

        <div class="row my-2"></div>
    </div>

    <script type="text/javascript">
        function insertData() {
            var data = {
                name: document.querySelector('#name').value,
                email: document.querySelector('#email').value,
                occupation: document.querySelector('#occupation').value,
                mobile: document.querySelector('#mobile').value,
                gender: document.querySelector('input[name="gender"]:checked').value,
                address: document.querySelector('#address').value
            }

            $.ajax({
                url: 'registraion.php',
                data: data,
                method: 'POST',
                success: successCallBack,
                error: errorCallBack
            });

        }

        function successCallBack(result) {
            //console.log("done: " + result);
            if (result == 'Inserted') {
                //window.location = "viewData.php";
                showData();
            }
        }

        function errorCallBack() {
            console.log("nope");
        }

    </script>





    <!-- ******************** Show Data ******************** -->



    <script type="text/javascript">
        $(document).ready(function() {
            showData();
        });

        function showData() {
            // $(document).ready(function() {
            // console.log("ID: ");
            var data = {
                id1: 1
            }

            $.ajax({
                url: 'viewDataApi.php',
                data: data,
                method: 'GET',
                success: showsuccessCallBack,
                error: showerrorCallBack
            });

            // });
        }

        function showsuccessCallBack(Val) {
            var x, i;
            var myJSON = JSON.parse(Val);

            for (i = 0; i < myJSON.length; i++) {
                //for (i in myJSON) {
                x = myJSON[i].name;
                // console.log("Name of All Participants : " + myJSON + "\n");
                document.getElementById("id_Show").innerHTML += myJSON[i].id + "<br><br>";
                document.getElementById("name_Show").innerHTML += myJSON[i].name + "<br><br>";
                document.getElementById("email_Show").innerHTML += myJSON[i].email + "<br><br>";
                document.getElementById("occupation_Show").innerHTML += myJSON[i].occupation + "<br><br>";
                document.getElementById("mobile_Show").innerHTML += myJSON[i].mobile + "<br><br>";
                document.getElementById("gender_Show").innerHTML += myJSON[i].gender + "<br><br>";
                document.getElementById("address_Show").innerHTML += myJSON[i].address + "<br><br>";

                // $('#edit').append("<a href='edit.php?id=myJSON[i].id'><h6> Edit </h6> </a><br>");
                document.getElementById("edit").innerHTML += "<a href='edit.php?id=" + myJSON[i].id + "'><h6> Edit </h6> </a><br>";

                document.getElementById("del").innerHTML += "<button class='button' onclick='deleteData(" + myJSON[i].id + ")' type='button'>Delete</button>" + "<br><br>";
            }
        }

        function showerrorCallBack() {
            console.log("nope");
        }

    </script>
    <link rel="stylesheet" href="style.css">


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
                    <label for="id" id="id_Show">
               
          </label>
                </div>
                <div class="col-md-2 my-3">
                    <label class="text-md-left" for="name" id="name_Show">
    
              </label>
                </div>
                <div class="col-md-2 my-3">
                    <label class="text-md-left" for="Email" id="email_Show">
              </label>
                </div>
                <div class="col-md-1 my-3">
                    <label class="text-md-left" for="Occupation" id="occupation_Show">
              </label>
                </div>
                <div class="col-md-1 my-3">
                    <label class="text-md-left" for="Mobile" id="mobile_Show">
              </label>
                </div>
                <div class="col-md-1 my-3">
                    <label class="text-md-left" for="Gender" id="gender_Show">
              </label>
                </div>
                <div class="col-md-2 my-3">
                    <label class="text-md-left" for="Address" id="address_Show">
               
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
