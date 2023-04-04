<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">
  <title>
       www.accessfunds.ltd
    </title>
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="theme-color" content="#000">
  <meta name="description" content="">
  <meta name="author" content="Patrick David"> <!-- Favicons -->
  <link rel="icon shortcut" href="assets/img/favicon-32.png" sizes="16x16" type="image/png">
  <link rel="icon" href="assets/img/favicon-32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="assets/img/favicon-48.png" sizes="48x48" type="image/png">
  <link rel="icon" href="assets/img/favicon-62.png" sizes="62x62" type="image/png">
  <link rel="icon" href="assets/img/favicon-96.png" sizes="96x96" type="image/png"> <!-- Canonical -->
  <link rel="canonical" href="/"> <!-- Open Graph -->
  <meta property="og:image" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content=""> <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:url" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content=""> <!-- Custom css -->
  <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <body><!--  Main Wrap  -->
  <div id="main-wrap"><!--  Header & Menu  --> <!--  class: fixed, bg, white, transparent  -->
   <header id="header"><!--  padding-sm, padding-md, padding-lg  -->
    <div class="wrap-header--padding-md">
     <nav class="main-navigation"><!--  Header Logo  --> <!--  class: height-sm, height-md, height-lg  -->
      <div id="logo" class="height-lg"><a class="navbar-brand" href="?a=home">
        <picture class="colored">
         <source srcset="assets/img/Logo.png, assets/img/Logo.png" type="image/png">
         <img src="assets/img/Logo.png" alt="Logo"> 
        </picture> </a>
      </div> <!--  END Header Logo  --> <!--  Menu  -->
      <div id="main-menu" aria-expanded="false" role="navigation">
       <div class="menu-holder" data-hidden="lg">
        <ul>
         <li><a href="?a=home">Home</a></li>
         <li><a href="?a=about">About</a></li>
         <li><a href="?a=faq">FAQ's</a></li>
         <li><a href="?a=support">Contact Us</a></li>
         <li><a href="?a=login">Login</a></li>
        </ul>
       </div> <!--  Menu Cta  -->
       <div class="cta"><a href="?a=signup" class="btn--medium--round--border">Signup</a>
       </div> <!--  END Menu Cta  --> <!--  Hamburger Menu  -->
       <div class="menu-button" data-visible="lg">
        <div class="icons"><span class="bar bar-1"></span> <span class="bar bar-2"></span> <span class="bar bar-3"></span>
        </div>
       </div> <!--  END: Hamburger Menu  -->
      </div> <!--  Mobile Menu  -->
      <div id="mobile-menu" data-visible="lg" aria-expanded="false" role="navigation"><!-- class: -bg -->
       <div class="mobile-wrap"><!-- class: -dotted, -border -->
        <div class="main-links--border col-12">
         <ul>
          <li><a href="?a=home">Home</a></li>
          <li><a href="?a=about">About</a></li>
          <li><a href="?a=faq">FAQ's</a></li>
          <li><a href="?a=support">Contact Us</a></li>
          <li><a href="?a=login">Login</a></li>
          <li><a href="?a=signup">Signup</a></li>
         </ul>
        </div>
       </div>
      </div> <!--  END Mobile Menu  -->
     </nav>
    </div>
   </header> <!--  END Header & Menu  --> <!--  Page Content  -->
   <div class="page-content">
    <section data-padding="sm">
     <div class="container">
      <div data-aos="fade-up" class="row align-items-lg-center" data-padding="xstop">
       <div class="col-12 col-md-6 col-xl-4 offset-xl-2">
        <script language="javascript">
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
        <form method="post" onsubmit="return checkform()" name="regform">
         <input type="hidden" name="form_id" value="16697791364252"><input type="hidden" name="form_token" value="4c293fd6d5c781c496889db969097fad"> <input type="hidden" name="a" value="signup"> <input type="hidden" name="action" value="signup">
         <div class="basic-form--border--round--row--boxed--shadow">
          <div class="col-12 text-center">
           <h5>Create Account</h5>
          </div>
          <div class="field col-12"><input name="fullname" value="" type="text" placeholder="Name" class="form-field">
          </div>
          <div class="field col-12"><input name="username" value="" type="text" placeholder="Username" class="form-field">
          </div>
          <div class="field col-12"><input type="password" placeholder="Password" class="form-field" name="password" value="">
          </div>
          <div class="field col-12"><input type="password" placeholder="Confirm Password" class="form-field" name="password2" value="">
          </div>
          <div class="field col-12"><input name="pay_account[1006][Account ID]" value="" type="text" placeholder="Bitcoin Account ID" class="form-field">
          </div>
          <div class="field col-12"><input name="pay_account[1007][Account ID]" value="" type="text" placeholder="Usdt Account ID" class="form-field">
          </div>
          <div class="field col-12"><input name="email" value="" type="text" placeholder="E-mail Address" class="form-field">
          </div>
          <div class="field col-12"><input name="email1" value="" type="text" placeholder="Retype Your E-mail" class="form-field">
          </div>
          <div class="field col-12"><input value="()" type="text" class="form-field" disabled>
          </div>
          <div class="field col-12" id="privacy-wrap"><input class="styled-checkbox" type="checkbox" name="agree" value="1"> <label for="privacy-form">I agree the <a href="?a=rules" target="_blank">Term and Conditions</a></label>
          </div>
          <div class="field col-12 text-center"><input type="submit" class="btn--big--round--full" value="Create Account">
          </div>
         </div>
        </form>
        <div class="row">
         <div class="col-12 text-center">
          <p class="small">Already have an account? <a href="?a=login" class="simple--primary--small">Sign in here</a></p>
         </div>
        </div>
       </div> <!--  END Page Content  --> <!--  CTA Section  -->
       <section data-aos="fade" data-padding="xstop">
        <div class="container">
         <div class="row">
          <div class="col-12">
           <div class="ctabox-element--center--round--light">
            <div class="text">
             <h2>EARN 8% AFFLIATES COMMISSION</h2>
            </div>
           </div>
          </div>
         </div>
        </div>
       </section> <!--  END: CTA Section  -->
      </div> <!--  END: Page Content  --> <!--  Footer  -->
      <footer data-aos="fade" id="footer" data-bg="white">
       <div class="container">
        <div class="row main-wrapper">
         <div class="col-12 col-md-4">
          <div class="logo-footer"><!-- -small, -medium, -big -->
           <div class="image--small"><img data-unveil src="#" data-src="assets/img/Logo.png" data-src-retina="assets/img/Logo.png" alt="">
           </div>
           <p>We provide fastest trading using modern technologies. No delays in order executions and most accurate quotes. Our trading platform is available around the clock and on weekends</p>
          </div>
         </div>
         <div class="col-12 col-md-6 offset-md-2">
          <div class="row">
           <div class="col-6 col-md-6">
            <div class="list-element--text">
             <h6>Pages</h6>
             <ul>
              <li><a href="?a=home">Home</a></li>
              <li><a href="?a=about">About</a></li>
              <li><a href="?a=faq">FAQ's</a></li>
              <li><a href="?a=rules">Terms</a></li>
              <li><a href="?a=support">Contact Us</a></li>
             </ul>
            </div>
           </div>
           <div class="col-6 col-md-6">
            <div class="info-footer">
             <h6>Contact</h6>
             <p>Location: Enterprise House, 2 Pass Street, Oldham, Manchester, United Kingdom, OL9 6HZ<br> support@www.accessfunds.ltd <br>+44 coming soon</p>
             <div class="social-element--small">
              <ul>
               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#"><i class="far fa-envelope"></i></a></li>
              </ul>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="row">
         <div class="col-12 down border">
          <div class="wrapper justify-content-md-between align-items-md-center">
           <div class="link">
            <div class="list-element--text--inline">
             <ul>
              <li><a href="?a=login">Login</a></li>
              <li><a href="?a=signup">Register</a></li>
             </ul>
            </div>
           </div>
           <div class="text">
            <p>� 2020 -<a href="#" class="simple" target="_blank">www.accessfunds.ltd</a></p>
           </div>
          </div>
         </div>
        </div>
       </div>
      </footer> <!--  END: Footer  -->
     </div> <!--  END: Main Wrap  --> <!--  Scripts  -->
     <script src="assets/js/master-dist.js"></script> <!--  END Scripts  --> <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164617531-1"></script>
     <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164617531-1');
    </script>
    </section>
   </div>
  </div>
 </body>
</html>