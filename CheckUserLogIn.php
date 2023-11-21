<html>
    <head>
        <title> Log In </title>
        <link rel="stylesheet" href="LogInPage.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>    
            <img id="Logo" src="BitzLogo.png" alt = "Bitz" style="height: 300px; width: 300px; padding-top: 40px;">
        </center>
        <div id="Credentials">
            <center>
            <?php
                include("DBConnect.php");

                $Email = $_POST['Email'];
                $Password = $_POST['Password'];

                if(isset($_POST['TOS'])){
                    if(empty($Email) && empty($Password) || empty($Email) || empty($Password)){
                        echo '<header style="color: red; font-size: 20px;"> You did not fill out the required fields </header>';
                        echo '<form method="link" action="LogInPage.php"> <input style="width: 250px; height: 25px;" type="submit" value="Try Logging In Again"> </form>';
                    }
                    else{
    
                    $Query = "SELECT Email, Password FROM Users 
                    WHERE Email = '$Email' AND Password = '$Password'";
          
                    $Result = mysqli_query($DB,$Query);
                                                             
                    $NumResults = mysqli_num_rows($Result);	
    
                    if ($NumResults == 1){
                        header ("Locaton: Home.php")
                    }
                    else{
                        header ("Locaton: RegisterNewUser.php")
                    }
                }
            }
            else{
                header ("Locaton: LogIn.html")
            }
            ?>
            </center>
        </div>
    </body>
</html>
