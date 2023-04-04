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
      <h3><span>faq</span></h3>
     </div>
    </div>
   </div>
  </div>
  <div class="inside_wrap">
   <div class="framebody">
    <h3>FAQ.</h3><br>
    <p align="justify"><b>How can I invest with earnmore.ltd ?</b><br> To make a investment you must first become a member of earnmore.ltd hyip. Once you are signed up, you can make your first deposit. All deposits must be made through the Members Area. You can login using the member username and password you receive when signup. <br> <br> <b>I wish to invest with earnmore.ltd but I don't have an any ecurrency account. What should I do?</b><br> You can open a free PM account here: <a href="https://www.perfectmoney.com/">www.perfectmoney.com</a><br> <br> <br> <b>How do I open my earnmore.ltd HYIP Account?</b><br> It's quite easy and convenient. Follow this <a href="?a=signup">link</a>, fill in the registration form and then press "Register". <br> <br> <b>Which e-currencies do you accept?</b><br> We accept e-currencies. <br> <br> <b>How can I withdraw funds?</b><br> Login to your account using your username and password and check the Withdraw section. <br> <br> <b>How long does it take for my deposit to be added to my account?</b><br> Your account will be updated as fast, as you deposit. <br> <br> <b>How can I change my e-mail address or password?</b><br> Log into your earnmore.ltd account and click on the "Account Information". You can change your e-mail address and password there. <br> <br> <b>What if I can't log into my account because I forgot my password?</b><br> Click <a href="?a=forgot_password">forgot password</a> link, type your username or e-mail and you'll receive your account information. <br> <br> <b>Does a daily profit paid directly to my currency account?</b><br> No, profits are gathered on your earnmore.ltd account and you can withdraw them anytime. <br> <br> <b>How do you calculate the interest on my account?</b><br> Depending on each plan. Interest on your earnmore.ltd HYIP account is acquired Daily, Weekly, Bi-Weekly, Monthly and Yearly and credited to your available balance at the end of each day. <br> <br> <b>Can I do a direct deposit from my account balance?</b><br> Yes! To make a deposit from your earnmore.ltd HYIP account balance. Simply login into your members account and click on Make Deposit ans select the Deposit from Account Balance Radio button. <br> <br> <b>Can I make an additional deposit to earnmore.ltd HYIP account once it has been opened?</b><br> Yes, you can but all transactions are handled separately. <br> <br> <b>After I make a withdrawal request, when will the funds be available on my ecurrency account?</b><br> Funds are usually available within 12 business hours. <br> <br> <b>How can I change my password?</b><br> You can change your password directly from your members area by editing it in your personal profile. <br> <br> <b>Can I lose money?</b><br> There is a risk involved with investing in all high yield investment programs. However, there are a few simple ways that can help you to reduce the risk of losing more than you can afford to. First, align your investments with your financial goals, in other words, keep the money you may need for the short-term out of more aggressive investments, reserving those investment funds for the money you intend to raise over the long-term. It's very important for you to know that we are real traders and that we invest members' funds on major investments. <br> <br> <b>How can I check my account balances?</b><br> You can access the account information 24 hours, seven days a week over the Internet. <br> <br> <b>May I open several accounts in your program?</b><br> No. If we find that one member has more than one account, the entire funds will be frozen. <br> <br> <b>How can I make a spend?</b><br> To make a spend you must first become a member of earnmore.ltd HYIP. Once you are signed up, you can make your first spend. All spends must be made through the Member Area. You can login using the member username and password you received when signup. <br> <br> <b>Who manages the funds?</b><br> These funds are managed by a team of earnmore.ltd HYIP investment experts. <br> <br></p>
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