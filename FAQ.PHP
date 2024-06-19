<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="FAQ.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

        <nav class="navbar">
            <div class="content">
            
            <img src="img/logo-3.png" alt="" class="logo-1">
            
            <ul class="menu-list">
                <li><a href ="about.php" class="nav-txt">About</a></li>
                <li><a href ="policy.php" class="nav-txt">Policy</a></li>
                <li><a href ="FAQ.PHP" class="nav-txt">Help</a></li>
                <li><a href ="contact.php" class="nav-txt">Contacts</a></li>
            
            </ul>
        
            </div>
        </nav>




    <section>
    <div class="main-container">
    <div class="wrapper">
        
        <h1>Frequently Asked Question (FAQ)</h1>

    <div class="faq">
        <button class="accordion">
            What is Marites?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    <div class="pannel">
        <p>Marites is home to thousands of communities, endless conversation, and authentic human connection. Whether you're into breaking news, sports, TV fan theories, or a never-ending stream of the Internet's cutest animals, there's a community on Marites for you.</p>
    </div>
    </div>

    <div class="faq">
        <button class="accordion">
            How Does Marites Work?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    <div class="pannel">
        <p>Every day, millions of people around the world post, vote, and comment in communities organized around their interests.</p>
    </div>
    </div>

    <div class="faq">
        <button class="accordion">
            What does "Marites" mean?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    <div class="pannel">
        <p>"Marites" in a Filipino context is a slang term used to refer to a person who loves gossip. We came up to this name of our webpage, because "Marites" is a source for what's new and popular on the web.</p>
    </div>
    </div>

    <div class="faq">
        <button class="accordion">
            I want to change my username. Do I have to start a new account?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    <div class="pannel">
        <p>Yes. Once a user account is created, the username cannot be edited. You can create a new user profile.</p>
    </div>
    </div> 

    <div class="faq">
        <button class="accordion">
            Is posting personal information ok?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    <div class="pannel">
        <p>NO. "Marites" is a pretty open and free speech place, but it is not ok to post someone's personal information, or post links to personal information. This includes links to public Facebook pages and screenshots of Facebook pages with the names still legible. We all get outraged by the ignorant things people say and do online, but witch hunts and vigilantism hurt innocent people and certain individual information, including personal info found online is often false. Posting personal information will get you banned.</p>
    </div>
    </div>

    <div class="faq">
        <button class="accordion">
            Is Marites available in languages other than English?
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    <div class="pannel">
        <p>Yes! In the upper-right corner of the page, there should be a link that says, "English". Click it and you'll get a popup where you can change to another language.</p>
    </div>
    </div>
</div>
</div>
    </section>



   <script>
     var acc = document.getElementsByClassName
     ("accordion");
     var i;

     for(i = 0; i < acc.length ; i++){
        acc[i].addEventListener("click", function
        (){
           this.classList.toggle("active");
           this.parentElement.classList.toggle
           ("active");

           var pannel = this.nextElementSibling;
           
           if(pannel.style.display === "block"){
             pannel.style.display = "none";
           } else {
            pannel.style.display = "block";
           }
        });
     }
   </script>


</body>
</html>