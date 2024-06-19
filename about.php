<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    
    <title>About Marites</title>
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
<section main-container>

<div class="wrapper">
    <header>
      <img src="img/bg-1.svg" class="background">
      <div class="content-txt">
        <img src="img/icon-22.svg" alt="" class="icon-22">
        <h1 class="title-1">Dive Into Anything</h1>
        <p class="subtitle-1">Marites is home to thousands of communities, endless conversation, and <br> authentic human connection. Whether you're into breaking news, sports, TV <br>fan theories, or a never-ending stream of the Internet's cutest animals, <br> there's a community on Marites for you.</p>
      </div>
      <img src="img/bg-3.svg" class="background-3"> 
      <img src="img/bg-2.svg" class="background-2"> 
   
      
      
    </header>
    <section>
      <div class="how">
        <h1 class="title-2">How Does Marites Work?</h1>
        <p class="subtitle-2">Every day, millions of people around the world post, vote, and comment in <br> communities organized around their interests.</p>
        <button class="learn-more">
        <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
        </span>
        <span class="button-text"><a href="marites.php" class="maritext">Visit marites.com</a></span>
      </button>
      </div>
      <img src="img/phone.png" alt="" class="phone">

      <div class="our-dev">
        <h1 class="title-3">Our Developers</h1>
        <p class="subtitle-3">Our Team consist of 6 wonderful and bright members including Adrian Frivaldo, <br> Dave Guion, and Erickson Guhilde as Front-End Developer, and Cedric Paul Mendoza, <br>Michael Obidos, and Mark Adrian Nova as Back-End Developer.</p>
      </div>

      <div class="footer-grid">
        <div class="footer">
          <ul class="footer-ul">
            <li class="footer-li"><h1 class="footer-txt">Company</h1></li>
            <li class="footer-li"><a href="">Marites Inc</a></li>
            <li class="footer-li"><a href="">Marites for Business</a></li>
            <li class="footer-li"><a href="">Careers</a></li>
            <li class="footer-li"><a href="">Blogs</a></li>
          </ul>
        </div>

        <div class="footer">
          <ul class="footer-ul">
            <li class="footer-li"><h1 class="footer-txt">Community</h1></li>
            <li class="footer-li"><a href="marites.php">Marites.com</a></li>
            <li class="footer-li"><a href="">Content Policy</a></li>
            <li class="footer-li"><a href="">Help Center</a></li>
            <li class="footer-li"><a href="">Contact</a></li>
          </ul>
        </div>

        <div class="footer">
          <ul class="footer-ul">
            <li class="footer-li"><h1 class="footer-txt">Privacy & Safety</h1></li>
            <li class="footer-li"><a href="policy.php">Privacy Policy</a></li>
            <li class="footer-li"><a href="">User Agreement</a></li>
            <li class="footer-li"><a href="">Transparency Report</a></li>
    
          </ul>
        </div>

        <div class="footer">
          <ul class="footer-ul">
            <li class="footer-li"><h1 class="footer-txt">Social Links</h1></li>
            <li class="footer-li"><a href="">Facebook</a></li>
            <li class="footer-li"><a href="">Twitter</a></li>
            <li class="footer-li"><a href="">Instagram</a></li>
            <li class="footer-li"><a href="">Github</a></li>
          </ul>
        </div>
      </div>
  </div>

</section>


<script>
  const elements = document.querySelectorAll('.phone');
const options = {
  root: null,
  rootMargin: '0px',
  threshold: .4
}
const callbacks = (entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting){
      entry.target.classList.add('active');
    }
  });
}
let observer = new IntersectionObserver(callbacks, options);
elements.forEach(element => {
  observer.observe(element);
});




</script>

    
</body>
</html>