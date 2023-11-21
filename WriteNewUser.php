<html>
    <head>
        <title> Log In </title>
        <link rel="stylesheet" href="LogInPage.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <center>    
            <img id="Logo" src="BitzLogo.png" alt = "Bitz" style="height: 300px; width: 300px; padding-top: 80px;">
        </center>
        <div id="Credentials">
            <center>
            <?php
                include("DBConnect.php");

                $Email = $_POST['Email'];
                $Password = $_POST['Password'];

                if(empty($Email) && empty($Password) || empty($Email) || empty($Password)){

                    echo '<header> You did not fill out the required fields </header>';
                    echo '<form method="link" action="RegUser.php"> <input style="width: 250px; height: 25px;" type="submit" value="Back To Register Page"> </form>';
                }
                else{

                    $Query1 = "SELECT Email, Password FROM Users WHERE Email = '$Email' AND Password = '$Password'";
                    $Query2 = "INSERT INTO Users (Email, Password) VALUES ('$Email', '$Password')";

                    $Results1 = mysqli_query($DB, $Query1);

                    $NumResults = mysqli_num_rows($Results1);
  
                    if($NumResults == 1){
  
                        echo "<h1> Account Already Exists <h1>";
  
                    }
                    else{

                        $Results2 = mysqli_query($DB, $Query2);

                        if($Results2){

                            echo "<h1> User Added </h1>";
                        }
                        else{

                            echo "<h1> User Could Not Be Added </h1>";
                        }
                    }
                }           
            ?>

            <form method="link" action="LogInPage.php">
                <input type="submit" value="Back to Login">
            </form>   
            </center>
        </div>
    </body>
</html>
