<?php
//index.php
include 'database/db.php';
include 'search.php';




session_start();


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Post</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="post-2.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>

 <nav>

<div class="top-nav">
       <a href="post.php"> <img src="img/logo-2.svg" alt="" class="logo-1"> </a>
       <img src="img/bell-icon.svg" alt="" class="icon-24">
       <img src="img/positive-icon.svg" alt="" class="icon-25">
    <!--SEARCH BAR -->
  <form class="form" action="post-2.php" method="POST">
       <label for="search"> 
       <input class="input" type="text" required="" placeholder="Search marites" id="search" name="usersearch"> 
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

  <button class="dropdown-btn"><img src="img/iconhome.svg" alt="" class="iconhome"><a href="" class="home1">Home</a>
             <i class="fa fa-caret-down"></i><img src="img/arrow-up.svg" alt="" class="arrow-up">
        </button>
        <div class="dropdown-container">
            
            <p class="feed">Feed</p>
            <a href="post.php" class="home" target="newsfeed">Home</a>
            <p class="others">Others</p>
            <a href="main-settings.php" class="User-settings" target="profile"> User settings</a>

        </div> 
       <!--  <button class="dropdown-btn1"> 
             <img src="img/boxprof-icon.svg" alt="" class="icon-26">
             <img src="img/human-icon.svg" alt="" class="icon-27">
        
             <i class="fa fa-caret-down"><p class="User_Name"> 
             <?= $_SESSION['USER_NAME']; ?>
             </p> </i>
             <img src="img/green-icon.svg" alt="" class="icon-28"> 
             <p class="online"> Online </p> 
             <img src="img/arrow-down.svg" alt="" class="icon-29"> 
        </button> -->
             <div class="dropdown-container1">
                <br>
                
                <a href="main-settings.php" class="profile-container" target="profile"> Profile </a> <br>
                <br>
                <a href="main-settings.php" class="User-settings1"> User settings</a> 
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
              </div>
</nav>



  <br />
  <br />


  

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
        

        var counterValue = document.querySelector("#counter-value");
var counterIncrement = document.querySelector("#counter-increment");
var counterDecrement = document.querySelector("#counter-decrement");
var count = 0;

this.counterIncrement.addEventListener('click', () => {
  this.count++
  this.counterValue.setAttribute("value", count);
});

this.counterDecrement.addEventListener('click', () => {
  this.count--
  this.counterValue.setAttribute("value", count);
});

</script>

 </body>
</html>