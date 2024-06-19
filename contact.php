<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="contact.css">
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

    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Send us a message</h3>
                <form>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><i class="fa fa-phone-square"></i>+63 929 696 6633</p>
                <p><i class="fa fa-envelope-square"></i>marites@gmail.com</p>
                <p><i class="fa fa-map-marker"></i>#69 San Bartolome, Quezon City, Philippines</p>
            </div>
            </div>
        </div>
    </section>
    
</body>
</html>