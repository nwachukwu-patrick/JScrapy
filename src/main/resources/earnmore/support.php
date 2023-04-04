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
      <h3><span>support</span></h3>
     </div>
    </div>
   </div>
  </div>
  <div class="inside_wrap">
   <h3 style="padding-left:50px;">Support Form:</h3>
   <div class="inside_wrap">
    <div class="inside_inner">
     <h2 class="header">Do you have any Questions?</h2> We strongly recommend that you start searching for the necessary information in the FAQ section. If you need advice or technical assistance, do not hesitate to contact our specialists. Customer support is available around the clock. You just need to send a letter or a request via the feedback form to promptly receive the necessary assistance. Remember that the more detailed the description of your problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a registered user of the website.
    </div>
   </div>
   <div class="inside_wrap contact_form" style="padding:20px;">
    <div class="inside_inner">
     <div class="form-container">
      <h2 class="header">Send Us a Message</h2>
      <div class="form-content">
       <script language="javascript">

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

</script>
       <form method="post" name="mainform" onsubmit="return checkform()">
        <input type="hidden" name="form_id" value="16697790128323"><input type="hidden" name="form_token" value="9a3c61e99dc3c5159727beeae1a1e1a2"> <input type="hidden" name="a" value="support"> <input type="hidden" name="action" value="send">
        <table border="0" cellpadding="5" cellspacing="5" width="100%">
         <tbody>
          <tr>
           <td>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
             <tbody>
              <tr>
               <td width="44%"><label> Your Name:</label> <input class="inpts" name="name" size="30" type="text" value=""></td>
               <td width="2%"></td>
               <td width="44%"><label>Your Email:</label> <input class="inpts" name="email" size="30" type="text" value=""></td>
              </tr>
             </tbody>
            </table></td>
          </tr>
          <tr>
           <td><label>Your Message:</label> <textarea class="inpts" cols="45" name="message" rows="4"></textarea></td>
          </tr>
          <tr>
           <td colspan="4" height="60" valign="bottom"><input class="sbmt" type="submit" value="Send"></td>
          </tr>
         </tbody>
        </table>
        <p></p>
       </form>
      </div>
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