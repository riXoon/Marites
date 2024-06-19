<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserSettings_Account.</title>
    <link rel="stylesheet" href="UserSettings_Account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- <div class="top-nav">
        <img src="img/logo-2.svg" alt="" class="logo-1">
        <img src="img/bell-icon.svg" alt="" class="icon-24">
        <img src="img/positive-icon.svg" alt="" class="icon-25">
        
        
        
  
     <form class="form">
           
        <label for="search"> 
        <input class="input" type="text" required="" placeholder="Search marites" id="search"> 
        <div class="fancy-bg"></div>
        <div class="search">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                <g>
                    <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                </g>
            </svg>
        </div>
        <button class="close-btn" type="reset">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        </label>
        </form>
    </div>

   
</nav> -->


<!-- <section class="page1">

       
        <button class="dropdown-btn"><img src="img/iconhome.svg" alt="" class="iconhome"><a href="" class="home1">User Settings</a>
             <i class="fa fa-caret-down"></i><img src="img/arrow-up.svg" alt="" class="arrow-up">
        </button>
        <div class="dropdown-container">
            
            <p class="feed">Feed</p>
            <a href="newsfeed.php" class="home">Home</a>
            <p class="others">Others</p>
            <a href="UserSettings_Profile.php" class="User-settings"> User setings</a>

        </div>
        <button class="dropdown-btn1"> 
             <img src="img/boxprof-icon.svg" alt="" class="icon-26">
             <img src="img/human-icon.svg" alt="" class="icon-27">
        
             <i class="fa fa-caret-down"><p class="User_Name"> user_name </p> </i>
             <img src="img/green-icon.svg" alt="" class="icon-28"> 
             <p class="online"> Online </p> 
             <img src="img/arrow-down.svg" alt="" class="icon-29"> 
        </button>
             <div class="dropdown-container1">
                <br>
                
                <a href="#" class="profile-container"> Profile </a> <br>
                <br>
                <a href="UserSettings_Profile.php" class="User-settings1"> User setings</a> 
                <br>
                <br>
                <button class="dropdown-btn2"> Terms & Policy 
                  <i class="fa fa-caret-down"></i>
                </button> 

                <div class="dropdown-container2">
                 <a href="#" class="PrivPol-container"> Private policy </a> <br>
                 <a href="#" class="Conpol-container"> Content policy </a> 
                </div>
                <br> <br><a href="marites.php" class="logout-container"> Log out</a> 
              </div> -->


<section class="main-container">

    <div class="user-container">
        <div class="user_settings">
            <h1>User Settings</h1>
        </div>
        <div class="nav_button">
        <nav>
            <button class="line"><a href="UserSettings_Account.php" class="acc">Account</a></button>
            <button><a href="UserSettings_Profile.php" class="profile">Profile</a></button>
            <button><a href="UserSettings_Notifications.php" class="notif">Notifications</a></button>
            <button>Subscriptions</button>
            <hr>
        </nav>
        </div>

    <div class="account_settings">
        <h1>Account Settings</h1>
        <h2>ACCOUNT PREFERENCES</h2>
        <hr>
    </div>
    <div class="email_address">
        <h1>Email Address</h1>
        <h2>Missing email, please update to secure your account.</h2>
        <button class="box-button">Change</button>
    </div>

    <div class="delete_account">
        <h2>DELETE ACCOUNT</h2>
        <span><h2>DELETE ACCOUNT</h2></span>
        <hr>
    </div>
    <div class="delete_icon">
        <button class="box">
            <i class="fa fa-trash" style="color: #BC3030;"></i>
        </button>
    </div>

    <div class="gender">
        <h1>Gender</h1>
        <h2>This information may be used to improve your recommendations and ads.</h2>
    </div>
    <div class="select">
        <select name="format" id="format">
            <option selected disabled>SELECT</option>
            <option value="male">Male</option>
            <option value="male">Female</option>
            <option value="male">Others</option>
    </div>
    </div>
</section>


<script>
       var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }


        var dropdown = document.getElementsByClassName("dropdown-btn1");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active1");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }

        
        var dropdown = document.getElementsByClassName("dropdown-btn2");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active1");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
    </script>


</body>
</html>