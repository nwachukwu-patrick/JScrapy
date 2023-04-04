<html>
 <head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <title>earnmore.ltd</title>
  <script src="//code.tidio.co/3asfvcxwljpewdc1whlxhctagwjpwovf.js" async></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
  <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="styles/animate.css" rel="stylesheet" type="text/css">
  <link href="styles/custom.css" rel="stylesheet" type="text/css">
  <link href="../styles/images/favicon.png" rel="icon">
  <script src="styles/jquery.js" type="text/javascript"></script>
  <script src="styles/wow.js"></script>
  <script src="styles/wow.min.js"></script>
  <script src="styles/bootstrap.min.js" type="text/javascript"></script>
  <script src="styles/setting2.js" type="text/javascript"></script>
  <script type="text/javascript">
 $(document).ready(function() {
        bitcoinprices.init({

            // Where we get bitcoinaverage data
            url: "https://api.bitcoinaverage.com/ticker/all",

            // Which of bitcoinaverages value we use to present prices
            marketRateVariable: "last",

            // Which currencies are in shown to the user
            currencies: ["USD","BTC"],

            // Special currency symbol artwork
            symbols: {
                "BTC": "<i class='fa fa-btc'></i>"
            },

            // Which currency we show user by the default if
            // no currency is selected
            defaultCurrency: "USD",

            // How the user is able to interact with the prices
            ux : {
                // Make everything with data-btc-price HTML attribute clickable
                clickPrices : false,

                // Build Bootstrap dropdown menu for currency switching
                menu : true,

                // Allow user to cycle through currency choices in currency:

                clickableCurrencySymbol:  false
            },

            // Allows passing the explicit jQuery version to bitcoinprices.
            // This is useful if you are using modular javascript (AMD/UMD/require()),
            // but for most normal usage you don't need this
            jQuery: jQuery,

            // Price source data attribute
            priceAttribute: "data-btc-price",

            // Price source currency for data-btc-price attribute.
            // E.g. if your shop prices are in USD
            // but converted to BTC when you do Bitcoin
            // checkout, put USD here.
            priceOrignalCurrency: "BTC"

        });
    });
</script>
  <script type="text/javascript"> //<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 </head>
 <body>
  <script type="text/javascript">
$(document).ready(function() {

		$('.accordion>dl>dt>a').click(function() 
		{
			$(this).toggleClass("rotate0");
		});
			/*------- parse price --------*/
			function parsePriceCrypto()
			{
				returnString = "";
				
				$.post( "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,LTC,ETH&tsyms=USD", function( data )
				{
					$('#price_btc2').text('$'+data['BTC']['USD']);
					$('#price_btc').text('$'+data['BTC']['USD']);
					$('#price_ltc').text('$'+data['LTC']['USD']);
					$('#price_eth').text('$'+data['ETH']['USD']);
				});
			}
			parsePriceCrypto();
			
			setInterval(function()
			{
				parsePriceCrypto();
			}
			, 5000);
		});
		
		$('.language').click(function() {
			$(this).toggleClass('active');
		});
		
		$('.mobileMenu').click(function() {
			$('.menu').toggleClass('mobile');
			$(this).toggleClass('rotate');
		});


	</script>
  <div class="wrapper">
   <div class="headerContainer">
    <div class="headerInner fadeInLeft wow"><a href="?a=home"><img src="logo.png"></a>
     <div class="hdRight">
      <div class="mainNavRight">
       <div class="navbar">
        <div class="navbar-inner">
         <ul class="nav">
          <li><a href="?a=home">Home</a></li>
          <li><a href="?a=cust&amp;page=about">About Us</a></li>
          <li><a href="?a=faq">FAQ</a></li>
          <li><a href="?a=rules">Rules</a></li>
          <li><a href="?a=cust&amp;page=affiliate">Affiliates</a></li>
          <li><a href="?a=cust&amp;page=banners">Banners</a></li>
          <li><a href="?a=support">Support</a></li>
          <li><a class="login" href="?a=login">login</a></li>
          <li><a class="signup" href="?a=signup">signup</a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="bannerContainer insidepages">
    <div class="bannerInner fadeInRight wow">
     <div class="ctn-banner">
      <h3><span>signup</span></h3>
     </div>
    </div>
   </div>
  </div>
  <div class="inside_wrap">
   <div class="framebody">
    <div class="loginwrap">
     <div class="main_logo">
      <a href="?a=home" id="logo"></a>
     </div>
     <div class="form-container-wrap">
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
       <input type="hidden" name="form_id" value="16697790203949"><input type="hidden" name="form_token" value="6be714704b2977421f62f411c08ff55f"> <input type="hidden" name="a" value="signup"> <input type="hidden" name="action" value="signup">
       <div class="form-container">
        <div class="signup1">
         <div class="signup-col"><label>Full Name</label> <input type="text" name="fullname" value="" class="inpts" size="30">
         </div>
         <div class="signup-col"><label>Username</label> <input type="text" name="username" value="" class="inpts" size="30">
         </div>
         <div class="signup-col"><label>Define Password</label> <input type="password" name="password" value="" class="inpts" size="30">
         </div>
         <div class="signup-col"><label>Retype Password</label> <input type="password" name="password2" value="" class="inpts" size="30">
         </div>
         <div class="signup-col"><label>E-mail Address</label> <input type="text" name="email" value="" class="inpts" size="30">
         </div>
         <div class="signup-col"><label>Retype E-mail</label> <input type="text" name="email1" value="" class="inpts" size="30">
         </div>
        </div>
       </div>
       <div class="form-container">
        <div class="signup-col2"><label> Tron usdt Admin:</label> <input type="text" class="inpts" size="30" name="pay_account[1006][Admin]" value="">
        </div>
        <div class="signup-col2"><label> Tron Admin:</label> <input type="text" class="inpts" size="30" name="pay_account[1007][Admin]" value="">
        </div>
        <div class="signup-col2"><label> Binance coin Admin:</label> <input type="text" class="inpts" size="30" name="pay_account[1008][Admin]" value="">
        </div>
        <div class="signup-col2"><label> Binance usdt Binance usdt:</label> <input type="text" class="inpts" size="30" name="pay_account[1009][Binance usdt]" value="">
        </div>
        <div class="signup-col2"><label> Bitcoin Bitcoin:</label> <input type="text" class="inpts" size="30" name="pay_account[1010][Bitcoin]" value="">
        </div>
        <div class="signup-col2"><label> Tether usdt(BEP20) Tether usdt(BEP20):</label> <input type="text" class="inpts" size="30" name="pay_account[1011][Tether usdt(BEP20)]" value="">
        </div>
        <div class="signup-col2"><label> Perfect money Perfect money:</label> <input type="text" class="inpts" size="30" name="pay_account[1012][Perfect money]" value="">
        </div>
        <div class="signup-col2"><label> Ethereum Ethereum:</label> <input type="text" class="inpts" size="30" name="pay_account[1013][Ethereum]" value="">
        </div>
        <div class="signup-col2"><label> Litecoin Litecoin:</label> <input type="text" class="inpts" size="30" name="pay_account[1014][Litecoin]" value="">
        </div>
        <div class="signup-col2"><label> Dogecoin Dogecoin:</label> <input type="text" class="inpts" size="30" name="pay_account[1015][Dogecoin]" value="">
        </div>
        <div class="signup-col2"><label> PAYEER Admin:</label> <input type="text" class="inpts" size="30" name="pay_account[1016][Admin]" value="">
        </div>
        <div class="signup-col2"><label>Your Upline:</label> N/A (n/a)
        </div>
        <div class="signup-col2">
         <input type="checkbox" name="agree" value="1"> I agree with <a href="?a=rules">Terms and conditions</a>
        </div>
        <div class="signup-col2"><input type="submit" value="Register" class="sbmt">
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
  <div class="footerContainer">
   <div class="footerInner">
    <div class="ft-row1"><a class="ft-logo" href="#"></a>
     <h3>2019 © earnmore.ltd. All Rights Reserved</h3>
    </div>
    <div class="ft-part1">
     <ul>
      <li><a href="?a=cust&amp;page=about">About Us</a></li>
      <li><a href="?a=cust&amp;page=rate_us">Rate us</a></li>
      <li><a href="?a=faq">Frequently asked questions</a></li>
     </ul>
    </div>
    <div class="ft-part1">
     <ul>
      <li><a href="?a=cust&amp;page=affiliate">affiliate program</a></li>
      <li><a href="?a=support">contact us</a></li>
      <li><a href="?a=rules">terms and conditions</a></li>
     </ul>
    </div>
    <div class="ft-part2"><a href="#"><img src="styles/images/ft-logo2.png"></a>
    </div>
   </div>
  </div>
 </body>
</html>