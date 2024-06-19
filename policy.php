<?php
//index.php
include 'database/db.php';
include 'search.php';

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="policy.css">
</head>
<body>

<nav>

<div class="top-nav">
       <a href="post.php"><img src="img/logo-2.svg" alt="" class="logo-1"></a>
       <img src="img/bell-icon.svg" alt="" class="icon-24">
       <img src="img/positive-icon.svg" alt="" class="icon-25">
    <!--SEARCH BAR TO PRE // sige pre-->
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

   
        <button class="dropdown-btn1"> 
             <img src="img/boxprof-icon.svg" alt="" class="icon-26">
             <img src="img/human-icon.svg" alt="" class="icon-27">
        
             <i class="fa fa-caret-down"><p class="User_Name"> <?= $_SESSION['USER_NAME']; ?></p> </i>
             <img src="img/green-icon.svg" alt="" class="icon-28"> 
             <p class="online"> Online </p> 
             <img src="img/arrow-down.svg" alt="" class="icon-29"> 
        </button>
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
                 <a href="#" class="PrivPol-container"> Privacy policy </a> <br>
                 <a href="#" class="Conpol-container"> Content policy </a> 
                </div>
                <br> <br><a href="marites.php" class="logout-container"> Log out</a> 
              </div>
</nav>


<div class="main2-container">
    <div class="leftside-container">
        
            <p class="jumpto-container">Jump to</p> 
            <img src="img/whitedot-icon.svg" class="icon-30">
            <img src="img/whitedot-icon.svg" class="icon-31">
            <a href="" class="info-text">What information we collect</a> 
            <a href="" class="rights-text">Your Rights and Choices</a> 
        
    </div>

    <div class="main-container">
        <button class="Policy-container"> 
            <p class="MarPol"><span></span>Marites Privacy Policy</p>  <img src="img/arrow-down.svg" class="icon-32">
            <i class="fa fa-caret-down"></i>
       </button>
       
       <button class="dropdown-btn3"> 
        <p class="languages">Languages</p>
        <img src="img/arrow-down.svg" class="icon-33">
        <i class="fa fa-caret-down"></i>
        
        </button>
        <div class="dropdown-container">
            
           <p class="Lang-container"> English (US) </p>
           <p class="Lang-container"> Filipino</p> 
           <p class="Lang-container"> Bisaya</p> 
           <p class="Lang-container"> bai</p> 
      
        </div>
    
        <div class="MPP-container">
            <p class="text-container">Marites Privacy Policy
                Effective November 20, 2023.
                At Marites, we think that privacy is a right. We wish to enable our users to be masters 
                of their own identities. We want you to understand how and why Marites, Inc. 
                ("Marites," "we," or "us") collects, uses, and shares information about you when you 
                use our sites, mobile apps, widgets, and other online products and services 
                (collectively, the "Services"), or when you otherwise interact with us or receive a 
                communication from us.
                <br>
                <br>By default, we collect minimum information that can be used to identify you. You do 
                not need an account to just browse. We do not ask you to tell us your actual name 
                if you want to register an account to participate in a submarites. We do not track 
                your exact location automatically. You may reveal as much or as little information 
                about yourself as you choose. You may establish additional accounts, update 
                information as needed, or request that we delete your information.
                <br>
                <br>
                Any data we gather is largely used to deliver our services, which are centered on 
                allowing people to connect and establish communities, the great majority of which 
                are open to the public. If you have any issues about how we utilize your information, 
                please contact us. 
                </p>
                <br>
        </div>

        <div class="WIC-container">
            <p class="WIC-text">What Information We Collect</p>
        </div>
        <div class="secondndmain-container">
           <p class="infoyouprov">Information You Provide On Us </p>
           <p class="text1">We collect information you provide to us directly when you use the Services. This includes: </p>

           <div class="third-container">
                <p class="text2">You don't need an account to use Marites. If you create a Marites account, 
                 your account
                will have 
                 <br>a username, which you provide or which was 
                automatically generated. Your username is public,
                <br> and it doesn't have to 
                be related to your real name. You may need to provide a   password. When 
                <br>you use Marites, you may provide other optional information. You may also 
                provide other 
                <br>information, such as a bio, gender, age, location, or profile 
                picture. This information is optional 
                <br> and may be removed at any time. We
                also store your user account preferences and 
                <br>settings. We may ask for 
                such information prior to you creating a username or account to
                <br> help 
                improve your experience exploring Marites.</p>
                <div class="text3-container">
                    <p class="text3">Account Information</p>
                </div>
                
                <p class="text4">Content you submit</p>
                <p class="text5">We collect the content you submit to the Services. This includes your posts 
                    and 
                    <br>comments including saved drafts, audio and videos you broadcast, your 
                    messages with other 
                    <br>users (e.g., private messages, chats, and modmail), and 
                    your reports and other communications
                    <br> with moderators and with us. Your 
                    content may include text, links, images, gifs, audio, and videos.
                </p>
                <div class="fourth-container">
                    <p class="text6">Actions You Take</p>
                    <p class="text7">We collect information about the actions you take when using the Services. 
                        This includes your
                        <br> interactions with content, like voting, saving, hiding, and 
                        reporting. It also includes your
                        <br> interactions with other users, such as following, 
                        friending, and blocking. We collect your
                        <br> interactions with communities, like 
                        your subscriptions or moderator status.</p>
                </div>
                <p class="text8">Other Information</p>
                <p class="text9">You may choose to provide other information to us. For example, we may 
                    collect information when 
                    <br>you fill out a form, participate in Marites-sponsored 
                    programs, activities or promotions, apply for a
                    <br> job, request customer support, 
                    or otherwise communicate with us.</p>
                
                    
             
            </div>
        </div>
        
       
        <div class="fifth-container">
                <p class="Use-info"> How We Use Information </p>
                <div class="sixth-container"><br>
                    <img src="img/whitedot-icon.svg" class="icon-34">
                    <img src="img/whitedot-icon.svg" class="icon-35">
                    <img src="img/whitedot-icon.svg" class="icon-36">
                    <img src="img/whitedot-icon.svg" class="icon-37">
                    <img src="img/whitedot-icon.svg" class="icon-38">
                    <img src="img/whitedot-icon.svg" class="icon-39">
                    <img src="img/whitedot-icon.svg" class="icon-40">
                    <img src="img/whitedot-icon.svg" class="icon-41">
                    <img src="img/whitedot-icon.svg" class="icon-42">

                    <p class="text10">Provide, maintain, and improve the Services;
                       <br>
                        Personalize services, content, and features that match your activities, preferences, and settings.
                        <br>
                        Help protect the safety of Marites and our users, which includes blocking suspected spammers, 
                       
                        addressing abuse, and enforcing the Marites User Agreement and our other policies;
                        <br>
                        Provide, optimize, target, and measure the effectiveness of ads shown on our Services;
                        <br>
                        Research and develop new services;
                        <br>
                        Send you technical notices, updates, security alerts, invoices, and other support and 
                        administrative 
                        messages;
                        <br>
                        Provide customer service;
                        <br>
                        Communicate with you about products, services, offers, promotions, and events, and provide 
                        other news and 
                        <br>information we think will be of interest to you (for information about how to opt 
                        out of these communications, see "Your Choices” below); and
                        <br>
                        Monitor and analyze trends, usage, and activities in connection with our Services.</p>
                </div>
                <p class="protect-info"> How We Protect Your Information </p>
                <div class="seventh-container">
                    <p class="text11">
                        We take measures to help protect information about you from loss, theft, misuse and unauthorized access, 
                        disclosure, alteration, and destruction. For example, we use HTTPS while information is being transmitted. 
                        We also enforce technical and administrative access controls to limit which of our employees have access 
                        to nonpublic personal information. You can help maintain the security of your account by configuring
                        two-factor authentication. We store the information we collect for as long as it is necessary for the purpose(s) 
                        for which we originally collected it. We may retain certain information for legitimate business purposes or as 
                        required by law.
                    </p>
                </div>
        </div>
            <div class="eighth-container">
                <p class="text12">Your Rights and Choices</p>
                <p class="text13">When you use the Services, you have choices about how to protect yourself and limit the collection, use, 
                    and sharing of information <br>about you. Depending on where you live, you may also have the right to request
                    access to, or the ability to port, your personal<br> information, to opt out of certain advertising practices, or to 
                    withdraw consent for processing where you have previously provided<br> consent. Each of these rights is described 
                    in detail below. Marites does not discriminate against users who exercise their rights under privacy laws.</p>
                    <div class="ninth-container">
                        <div class="tenth-container">
                            <p class="text14">Accessing and <br> changing your <br> information</p>
                            <p class="text15">You can access your information and change or correct certain information 
                                through the Services. <br> See our Help Center page for more information. You can 
                                also request a copy of the personal <br> information Marites maintains about you 
                                by following the process described here.</p>
                        </div>
                        <p class="text16">Deleting Your <br> Account</p>
                        <p class="text17">You may delete your account information at any time from the user preferences 
                            page. You can <br> also submit a request to delete the personal information Marites 
                            maintains about you by following <br> the process described below this table. When 
                            you delete your account, your profile is no longer <br> visible to other users and 
                            disassociated from content you posted under that account. Please note, <br>
                            however, that the posts, comments, and messages you submitted prior to 
                            deleting your account <br> will still be visible to others unless you first delete the 
                            specific content. After you submit a request <br>  to delete your account, it may take
                            up to 90 days for our purge script to complete deletion. We <br> may also retain 
                            certain information about you as required by law or for legitimate business <br>
                            purposes.</p>
                         <div class="eleventh-container">
                            <p class="text18">Controlling<br>Promotional<br>Communications</p>
                            <p class="text19">You may opt out of receiving some or all categories of promotional 
                                communications from us by <br> following the instructions in those communications 
                                or by updating your email options in your <br> account preferences here. If you opt 
                                out of promotional communications, we may still send you <br> non-promotional 
                                communications, such as information about your account or your use 
                                of the <br> Services.</p>
                        </div>
                        <p class="text20">Controlling <br> Mobile <br> Notifications</p>
                        <p class="text21">With your consent, we may send promotional and non-promotional push 
                            notifications or alerts to <br> your mobile device. You can deactivate these messages 
                            at any time by changing the notification <br> settings on your mobile device.</p>
                    </div>
                    <div class="Twelfth-container">
                        <p class="text22">Children</p>
                        <p class="text23">Children under the age of 13 are not allowed to create an account or otherwise use the Services. Additionally, 
                            if you are located <br> outside the Philippines, you must be over the age required by the laws of your country to 
                            create an account or otherwise use the <br> Services, or we need to have obtained verifiable consent from your 
                            parent or legal guardian.</p>
                            <p class="text24">Changes To This Policy</p>
                            <p class="text25">We may change this Privacy Policy from time to time. If we do, we will let you know by revising the date at the 
                                top of the policy. If the changes, in our sole discretion, are material, we may also notify you by sending an email 
                                to the address associated with your  <br> account (if you have chosen to provide an email address) or by otherwise 
                                providing notice through our Services. We encourage<br> you to review  the Privacy Policy regularly to stay informed 
                                about our information practices and the ways you can help protect your <br> privacy. By continuing to use our 
                                Services after Privacy Policy changes go into effect, you agree to be bound by the revised policy.</p>
                    </div>
            </div>
       
    </div>
    
    
    
    
</div>
    
    
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

        var dropdown = document.getElementsByClassName("dropdown-btn3");
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