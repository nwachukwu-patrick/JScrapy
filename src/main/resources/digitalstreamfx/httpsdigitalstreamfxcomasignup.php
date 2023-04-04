<!doctype html>
<html class=" sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox picture srcset webworkers" style="height: 100%;" lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>
        Digital Stream Fx - Digital Stream Fx
    </title>
  <link rel="stylesheet" type="text/css" href="cssjs/w3.css">
  <link rel="stylesheet" href="files/bootstrap.min.css">
  <link rel="stylesheet" href="files/all.css">
  <link rel="stylesheet" href="files/nice-select.css">
  <link rel="stylesheet" href="files/slick.css">
  <link rel="stylesheet" href="files/swiper.min.css">
  <link rel="stylesheet" href="files/default.css">
  <link rel="stylesheet" href="files/style.css">
  <link href="files/metismenu.min.css" rel="stylesheet" type="text/css">
  <link href="files/icons.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" charset="utf-8" async src="files/loader.js"></script>
  <script type="text/javascript" charset="UTF-8" src="files/main.js"></script>
  <script type="text/javascript" charset="UTF-8" src="files/element_main.js"></script>
 </head>
 <body style="width: 100%;background:#31155B;">
  <div id="content" class="site-content">
   <div class="main-content"><!-- Faq's -->
    <div class="iq-faqs overview-block-ptb">
     <section style="overflow: scroll;" class="">
      <div class="w3-container w3-padding" style="height: auto;font-family: 'Open Sans', sans-serif;">
       <div class="w3-content  " id="log" style="padding-top:5%;">
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
        <form method="post" onsubmit="return checkform()" name="regform" class="w3-white w3-padding w3-round" style="font-weight: bolder;font-size: small;">
         <input type="hidden" name="form_id" value="16697832719651"><input type="hidden" name="form_token" value="71858bcc142128ebddf78841cbc08dd3">
         <div class="w3-row w3-margin-top">
          <div class="w3-col l6 s6">
           <div class="w3-left">
            <h4 class=""><b>Hello there!</b></h4>
            <p class="text-muted w3-small">Register an Account to Get Started!</p>
           </div>
          </div>
          <div class="w3-col l6 s6">
           <div class="w3-right"><a href="/" class="logo-admin"> <h2 class="w3-large" style="color:#0056B3;text-transform: uppercase;font-weight: bolder;"><b>Digital Stream Fx</b></h2> </a>
           </div>
          </div>
         </div> <br><br> <input type="hidden" name="a" value="signup"> <input type="hidden" name="action" value="signup">
         <div class=""><input type="text" name="fullname" value="" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Your Full Name"> <input type="text" name="username" value="" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Your Username"> <input type="password" name="password" value="" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Define Password"> <input type="password" name="password2" value="" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Retype Password">
          <div class="w3-hide"><input type="text" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" name="pay_account[48]" value="" data-validate="regexp" data-validate-regexp="^(bc1|[13])[a-zA-HJ-NP-Z0-9]{25,39}$" data-validate-notice="Bitcoin Address" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Your Bitcoin Account">
          </div>
          <div class="w3-hide"><input type="text" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" name="pay_account[69]" value="" data-validate="regexp" data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$" data-validate-notice="Ethereum Address" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Your Ethereum Account">
          </div>
          <div class="w3-hide"><input type="text" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" name="pay_account[1000][Account ID]" value="" placeholder="Your USDT Account ID:">
          </div> <input type="text" name="email" value="" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Your E-mail Address"> <input type="text" name="email1" value="" class="w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Retype Your E-mail"> <input type="text" name="sq" value="ada" class="w3-hide w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Secret question"> <input type="text" name="sa" value="ada" class="w3-hide w3-input w3-margin-top  w3-border w3-input w3-margin-top -color" placeholder="Secret answer">
          <div class="w3-container w3-margin-top"><label class="w3-label w3-text-white">Your Upline:</label> N/A (n/a)
          </div>
          <div class=" w3-container   w3-margin-top"><input class="w3-checkbox w3-border" type="checkbox" name="agree" value="1"> I agree with <a href=" ?a=rules" class="w3-center">Terms and conditions</a>
          </div> <br> <button style="background: #E2595F;" class="w3-btn w3-text-white  w3-margin-top w3-round"><b>Register</b></button>
         </div>
        </form>
        <div style="font-weight: bolder;" class="w3-margin-top w3-small w3-padding-bottom w3-container w3-center">
         <div class="w3-text-grey">
          have an account ? <br> <a href="?a=login" class="w3-text-white">Login Here ? </a>
         </div> <br><br><br>
         <div class="w3-text-white">
          © 2022 Digital Stream Fx.
         </div>
         <div id="google_translate_element"></div>
        </div>
       </div>
      </div>
     </section>
    </div>
   </div>
   <style>
        a {
            text-decoration: none;
        }

        .blue {
            background: #131E3B;
            color: white;
        }

        .lightgreen {
            background: #00FFA9;
            color: black;
        }

        .w3-bar-item a:hover {
            border-bottom: 1px solid green;

        }

        .w3-input w3-margin-top -color {
            color: black !important;
        }

        #log {
            width: 600px;
        }



        @media only screen and (max-width: 600px) {
            #log {
                width: 100%;

            }
        }
        </style>
  </div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
    </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <style type="text/css">
    #google_translate_element {
        position: fixed;
        bottom: 0px;
        left: 0px;
        z-index: 200;

    }

    div.goog-te-gadget {
        color: transparent;
        border: 0px solid blue;
        overflow: hidden;
        height: 35px;
        position: relative;
        margin: 0px;

    }

    .goog-te-combo {
        background: black;
        width: 200px;
        height: 30px;

        color: white;
        padding: 5px;

        font-weight: bold;


        border: 1px solid white;

    }
    </style>
 </body>
</html>