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

    <?php 
        
        session_start();
   
//        if(!isset($_SESSION['userid']) && empty($_SESSION['password'])){
//            
//        }
    
        $uid = $_SESSION['userid'];
        $psw = $_SESSION['password'];
               
        $email = "ashvini.patwardhan@gmail.com";
        $pswd = "abc123";

    ?>

</head>

<body>
    <div class="container-fluid">

        <form method="get" action="registraion.php">
            <div class="row my-2">
                <div class="col-md-2"></div>

            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <h4> Registraion Form</h4>
                </div>

                <div class="col-md-4"></div>

                <?php 
                   // echo "1. email= " . $email ." + uid = ". $uid;
                   // echo "<br> 2. pswd= " . $pswd ." + psw = ". $psw;
                
                    if(($email==$uid) && ($pswd==$psw) )
                    {
                ?>
                <div class="col-md-1">
                    <h6> <a class="login_toggle" href="logout.php">Logout</a> </h6>
                </div>
                <?php
                    }
                    elseif(($email !== $uid) || ($pswd !== $psw) )
                    {
                        $error = "f";
                        header('location:login.html?user=".$error');
                    }
                ?>


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
                    <textarea name="address" id="" cols="30" rows="10" placeholder="Address"></textarea>
                </div>
            </div>

            <div class="row my-2"></div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <button class="button" type="submit">Apply</button>
                </div>
            </div>

            <div class="row my-4"></div>
        </form>

    </div>
</body>

</html>
