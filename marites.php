<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="marites.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Marites</title>
    
</head>
<body>

    <section class="page-1">
    <nav>
    <div class="top-nav"> 
         <img src="img/logo-1.png" alt="" class="logo-1">

         <!--SEARCH BAR-->
         <form class="form">
        <label for="search">
        <a href="#demo-modal"><input class="input" type="text" required="" placeholder="Search marites" id="search"></a>
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
<!--END NG SEARCH BAR-->

<div class="wrapper">
 <a href="#demo-modal" class="log-a"><button class="btn-1">Log in</button></a>
        
</div>

<div id="demo-modal" class="modal">
    <div class="modal__content">

    <div class="center">
        <h1 class="text-log1">Log In</h1>
        <p class="text-log2">By continuing, you agree to our <span>User Agreement</span> and acknowledge that you understand the <span>Privacy Policy.</span> </p>
        <form method="POST" action="database/login.php">
            <span></span>
            <div class="txt_field">
                <input type="text" required class="username-1" name="username">
                <label>Username<span>*</span></label>
            </div>
            <div class="txt_field">
                <input type="password" required class="password-1" name="password">
                <label>Password<span>*</span></label>
            </div> 
            <span></span>
            <div class="pass">Forgot Password?</div>
            <div class="signup_link"> 
                New to Marites? <a href="#demo-modal-1">Sign Up</a>
            </div>
            <input type="submit" value="Log In" class="submit-1" name="submit">

        </form>
    </div>    
        <a href="#" class="modal__close">&times;</a>
    </div>
</div>

<div id="demo-modal-1" class="modal-1">
    <div class="modal__content-1">

    <div class="center">
        <h1 class="text-log1">Sign Up</h1>
        <p class="text-log2">By continuing, you agree to our <span>User Agreement</span> and acknowledge that you understand the <span>Privacy Policy.</span> </p>
        <form method="POST" action="database/signup.php">
            <span></span>
            <div class="txt_field">
                
                <input type="text" required class="username-1" name="username" id="nameplace">
                <label>Create Username<span>*</span></label>
    
                <button type="button" id="gen-button" class="random-un" ><img src="img/icon-21.svg" alt=""></button>
                
            </div>
            <div class="txt_field">
                <input type="password" required class="password-1" name="password">
                <label>Create Password<span>*</span></label>
            </div> 
            <div class="txt_field">
                <input type="password" required class="password-2" name="password2">
                <label>Confirm Password<span>*</span></label>
            </div> 
            <span></span>
            
            <div class="signup_link"> 
                Already Chismoso? <a href="#demo-modal">Log In</a>
            </div>
            <input type="submit" value="Register" class="submit-1" name="submit">

        </form>

    </div>

    
    
        <a href="#" class="modal__close-1">&times;</a>
    </div>
</div>
        
    </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
     <span id="post_message"></span>
            <br />
            <div id="display_post"></div>
            </div>




    



    <div class="left-nav">

        <a href="#" class="home"><img src="img/iconhome.svg" alt="" class="home-icon">Home</a>
    
        <div class="border"></div>
        
        <div class="sidenav">

        <button class="dropdown-btn-1">TOPICS <img src="img/arrow-up.svg" alt="" class="arrow-up">
            
        </button>
        <div class="dropdown-container">
       
        <div class="nav-1">
        
            
            <button class="dropdown-btn-2"> <img src="img/icon-1.svg" alt="" class="icon-1">Gaming <img src="img/arrow-down.svg" alt="" class="arrow-down">
                
            </button>
                   
            <div class="dropdown-container">
                
                <a href="#" class="nav-txt">Clash of Clans</a>
                <a href="#" class="nav-txt">Call of duty</a>
                <a href="#" class="nav-txt">Mobile Legends</a>
               
            </div>  
        <div class="dropdown-container">
          
            <button class="dropdown-btn-2"><img src="img/icon-2.svg" alt="" class="icon-2">Academics <img src="img/arrow-down.svg" class="arrow-down-2" alt="">
            
             
            </button>
            <div class="dropdown-container">
                <a href="#" class="nav-txt">Math</a>
                <a href="#" class="nav-txt">Science</a>
                <a href="#" class="nav-txt">English</a>
            </div>  
    
        <div class="chsms-rnts">
         <a href="#" class="chsms"><img src="img/icon-3.svg" alt="" class="icon-3">Chismis</a>
         </div> 
         <div class="chsms-rnts">
        <a href="#" class="rnts"><img src="img/icon-4.svg" alt="" class="icon-4">Rants</a> 
        </div>  
        </div>

        <div class="border"></div>
    
       
    </div>

    
</div>
       
        <button class="dropdown-btn-3">RESOURCES <img src="img/arrow-up.svg" alt="" class="arrow-up1"></button>
         
            <div class="dropdown-container">
                <div class="src-container"> 
                 <a href="about.php" class="nav-txt"><img src="img/icon-5.svg"  alt="" class="icon-5">About Marites</a>
                 </div>
             <div class="src-container"> 
                 <a href="#" class="nav-txt"><img src="img/icon-6.svg" alt="" class="icon-6">Content Policy</a>
            </div>
                 <div class="src-container"> 
                  <a href="#" class="nav-txt"><img src="img/icon-7.svg" alt="" class="icon-7">Privacy Policy</a>
            </div>
        </div>  
          


    </section>
    

     


    <script>

$(document).ready(function(){
 
 $('#post_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"addpost.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#post_form')[0].reset();
     $('#post_message').html(data.error);
     $('#post_id').val('0');
     load_post();
    }
   }
  })
 });

 load_post();

 function load_post()
 {
  $.ajax({
   url:"fetch_post.php",
   method:"POST",
   success:function(data)
   {
    $('#display_post').load("post.php");
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#post_id').val(comment_id);
  $('#post_name').focus();
 });
 
});
       
        var dropdown = document.getElementsByClassName("dropdown-btn-1");
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
        });}

        var dropdown = document.getElementsByClassName("dropdown-btn-2");
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

    var dropdown = document.getElementsByClassName("dropdown-btn-3");
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


 

    </script>
    
</body>
</html>


