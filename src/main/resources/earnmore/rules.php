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
      <h3><span>rules</span></h3>
     </div>
    </div>
   </div>
  </div>
  <div class="inside_wrap">
   <div class="framebody">
    <h3>Rules &amp; Agreements.</h3> <br>
    <p align="justify">Please read the following rules carefully before signing in.<br><br> You agree to be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years.<br><br> earnmore.ltd is not available to the general public and is opened only to the qualified members of earnmore.ltd, the use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between the earnmore.ltd and its Member.<br><br> As a private transaction, this program is exempt from the US Securities Act of 1933, the US Securities Exchange Act of 1934 and the US Investment Company Act of 1940 and all other rules, regulations and amendments thereof. We are not FDIC insured. We are not a licensed bank or a security firm.<br><br> You agree that all information, communications, materials coming from earnmore.ltd are unsolicited and must be kept private, confidential and protected from any disclosure. Moreover, the information, communications and materials contained herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction which deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such offer or solicitation.<br> <br> All the data giving by a member to earnmore.ltd will be only privately used and not disclosed to any third parties. earnmore.ltd is not responsible or liable for any loss of data.<br><br> You agree to hold all principals and members harmless of any liability. You are investing at your own risk and you agree that a past performance is not an explicit guarantee for the same future performance. You agree that all information, communications and materials you will find on this site are intended to be regarded as an informational and educational matter and not an investment advice.<br> <br> We reserve the right to change the rules, commissions and rates of the program at any time and at our sole discretion without notice, especially in order to respect the integrity and security of the members' interests. You agree that it is your sole responsibility to review the current terms. <br> <br> earnmore.ltd is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to earnmore.ltd that you will not use this site in any illegal way and you agree to respect your local, national and international laws.<br><br> Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR the thing with the administrator.<br><br> We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program.<br><br> earnmore.ltd reserves the right to accept or decline any member for membership without explanation.<br><br> If you do not agree with the above disclaimer, please do not go any further.</p>
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