<html>
    <head>
        <title> Add Listing </title>
        <link rel="stylesheet" href="HomePage.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <div id="LogoContainer">
            <img id="Logo" src="BitzLogo.png" alt="Bitz">
        </div>

        <div class="dropdown">
            <button class="dropbtn"> Account </button>
                <div class="dropdown-content">
                    <li>
                        <a href="LogInPage.php">
                            <i class="material-symbols-outlined"> logout </i> Logout
                        </a>
                    </li>
                    <li>
                        <a href="#UserAccount">
                            <i class="material-symbols-outlined"> badge </i> User Account
                        </a>
                    </li>
                    <li>
                        <a href="#AccountSettings">
                            <i class="material-symbols-outlined"> settings </i> Account Settings
                        </a>
                    </li>
                </div> 
            </div>
        </head>
    <body>
    <div>
        <ul>
            <li>
                <a href="Home.php">
                    <i class="material-symbols-outlined"> home </i> Home
                </a>
            </li>
            <li>
                <a href="#CPU">
                    <i class="material-symbols-outlined"> memory </i> CPU
                </a>
            </li>
            <li>
                <a href="#RAM">
                    <i class="material-symbols-outlined"> memory </i> RAM
                </a>
            </li>
            <li>
                <a href="#GPU">
                    <i class="material-symbols-outlined"> memory </i> GPU
                </a>
            </li>
            <li>
                <a href="#PSU">
                    <i class="material-symbols-outlined"> memory </i> PSU
                </a>
            </li>
            <li>
                <a href="#Coolers">
                    <i class="material-symbols-outlined"> memory </i> Coolers
                </a>
            </li>
            <li>
                <a href="#SHPC">
                    <i class="material-symbols-outlined"> devices </i> Second-Hand PC's
                </a>
            </li>
            <li>
                <a href="#Monitors">
                    <i class="material-symbols-outlined"> desktop_windows </i> Monitors
                </a>
            </li>
            <li>
                <a href="#LaptopsW/L">
                    <i class="material-symbols-outlined"> computer </i> Laptops Windows/Linux
                </a>
            </li>
            <li>
                <a href="#AndroidPhones">
                    <i class="material-symbols-outlined"> smartphone </i> Android Phones
                </a>
            </li>
            <li>
                <a href="#Macbooks">
                    <i class="material-symbols-outlined"> laptop_mac </i> Macbooks
                </a>
            </li>
            <li>
                <a href="#Iphones">
                    <i class="material-symbols-outlined"> phone_iphone </i> Iphones
                </a>
            </li>
            <li style="float:right;">
                <a class="active">
                    <i class="material-symbols-outlined"> add </i> Add Listing
                </a>
            </li>   
        </ul>
    </div>

    <div id="AddListingArea">
            <form method="post" action="WriteListing.php">

            <div id="ListingSections">
                <h1 style="text-align: center; font-family: Varela Round; text-decoration: underline;"> LISTING DETAILS </h1>
            </div>

            <div id="ListingSections">
                <p style="text-align: center; font-family: Varela Round; font-size: larger;"> Select an image of the item you want to list </p>
                <input type="file" id="ListingImage" name="ListingImage" accept="image/png, image/jpeg" />
            </div>
            
            <div id="ListingSections">
                <p id="ItemName" style="font-family: Varela Round;"> Item Name </p>
                <input type="text" id="ItemNameInput" name="item_name" size="30">
            </div>
            
            <div id="ListingSections">
                <p id="ItemDescription" style="font-family: Varela Round;"> Item Description </p>
                <textarea id="ItemDescriptionBox" rows="20" cols="20"> </textarea>
            </div>
            
            <div id="ListingSections">
                <p id="ItemPrice" style="font-family: Varela Round; text-align: center; font-size: larger;"> Item Price </p>
                <p style="margin-left: 212px; margin-bottom: -22.5px;" id="Pound">
                    <i class="material-symbols-outlined"> currency_pound </i>
                </p>
                <input  id="PriceInput" type="number" min="0.00" max="10000.00" step="0.01" />
            </div>
            <p id="ItemType" style="font-family: Varela Round;"> Select Item Type </p>
            <select name="Item" id="ItemTypeSelection">
                <option value="CPU"> CPU </option>
                <option value="GPU"> GPU </option>
                <option value="PSU"> PSU </option>
                <option value="RAM"> RAM </option>
                <option value="Cooler"> Cooler </option>
                <option value="Case"> PC Case </option>
                <option value="Second-HandPC"> Second-Hand PC </option>
                <option value="Monitor"> Monitor </option>
                <option value="Laptop-Window"> Windows Laptop </option>
                <option value="Laptop-Linux"> Linux Laptop </option>
                <option value="Macbook"> Macbook </option>
                <option value="Android-Phone"> Android Phone </option>
                <option value="Iphone"> Iphone </option>
            </select>
        </form>
    </div>
    </body>
</html>
