<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact us</title>
  <meta name="generator" content="DA-Formmaker 4.10.7"> <!--TEMPLATE:4.2-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
  <script>
        $(function () {
            
            $('#message').keyup(function () {
    var characterCount = $(this).val().length,
        current = $('#current_message'),
        maximum = $('#maximum_message'),
        theCount = $('#the-count_message');
    var maxlength = $(this).attr('maxlength');
    var changeColor = 0.75 * maxlength;
    current.text(characterCount);

    if (characterCount > changeColor && characterCount < maxlength) {
        current.css('color', '#FF4500');
        current.css('fontWeight', 'bold');
    }
    else if (characterCount >= maxlength) {
        current.css('color', '#B22222');
        current.css('fontWeight', 'bold');
    }
    else {
        var col = maximum.css('color');
        var fontW = maximum.css('fontWeight');
        current.css('color', col);
        current.css('fontWeight', fontW);
    }

});

            });
    </script>
  <style type="text/css">


        body { background-color:#f8f9fa; color:#000000; font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"; font-size: 12pt; }
h1 { color:#000000; font-family:"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"; font-size:18pt; }
p,li { color:#000000; font-family:"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"; font-size:12pt; }
.control-label { color:#000000; font-family:"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"; font-size:12pt; }
.internal { display: none; }


        .captcha {
            width: 15%;
            min-width: 120px;
            display: inline;
        }

        .form-control {
            margin-bottom: 5px;
        }

        .textend {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .checkbox {
            margin-top: 0px;
        }

        .radio {
            margin-top: 0px;
        }

        .zwtext {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .input-file {
            border-width: 0px;
            height: 100%;
            background-color: transparent;
        }

        body {
        	margin-top: 15px;
        	line-height: 1.5 !important;
        }

        h3 {
          font-size: 1.3rem;
        }


        

    </style>
  <script type="text/javascript">
    function addHiddenField(formID, name, value)
{
	var input = document.createElement("input");
	input.setAttribute("type", "hidden");
	input.setAttribute(name, "name_you_want");
	input.setAttribute(value, "value_you_want");
	document.getElementById(formID).appendChild(input);
}

function GetCookie(cookie_name)
{
  if (document.cookie.length>0)
    {
    cookie_start=document.cookie.indexOf(cookie_name + "=");
    if (cookie_start!=-1)
      { 
      cookie_start=cookie_start + cookie_name.length+1; 
      cookie_end=document.cookie.indexOf(";",cookie_start);
      if (cookie_end==-1) cookie_end=document.cookie.length;
      return unescape(document.cookie.substring(cookie_start,cookie_end));
      } 
    }
  return "";
}

function str_replace(search, replace, subject) {
	return subject.split(search).join(replace);
}
    </script> <!-- DAFORMJSBEGIN -->
  <script type="text/javascript">
/* <![CDATA[ */
  function refreshCaptcha()
  {
      var now = new Date();
      if (document.images) {
          document.images.captchaimg.src = 'https://www.ekiwi-scripts.de/form/v4/formmail_v4.php?action=captcha&id=276732&now=' + now.getTime();
      }     
  }
/* ]]> */
</script>
  <script type="text/javascript">

        function SetCookieValues() {
             document.DAFORM.Phone.value = GetCookie("Phone");


}

    function SetCookies() {
         cookie_Phone = 'Phone=' + escape(document.DAFORM.Phone.value);
   document.cookie = cookie_Phone;


}

    </script>
  <script type="text/javascript">
var $varCaptchaOK = -1;

function validateCaptcha($input) {
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == "OK") {
        $varCaptchaOK = 1;
      }
      if (this.responseText == "FAIL") {
        $varCaptchaOK = 0;
      }       
    } else if (this.readyState == 4 && this.status != 200)
    {
      $varCaptchaOK = 99;
    }
  };
  xhttp.open("GET", "https://www.ekiwi-scripts.de/form/v4/captcha.php?input=" + $input + "&formid=276732", true);
  xhttp.send();
}

function chkFormular()
{
if(document.DAFORM.Phone.value.trim() == "")  {
alert("input your phone no");
document.DAFORM.Phone.focus();
return false;
}

if(!document.DAFORM.email.value.match(/^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i))  {
alert("Please enter your email address so that we can contact you.");
document.DAFORM.email.focus();
return false;
}

if(document.DAFORM.message.value == "")  {
alert("Please leave your message.");
document.DAFORM.message.focus();
return false;
}

	var $catpchaInput = document.DAFORM.captcha_input.value.trim();
	if ($varCaptchaOK == 0 || $catpchaInput == "")
	{
		alert("Error: Captcha input not correct.");
		return(false);
	}
	return true;
}
</script> <!-- JSCRIPT2 --> <!-- DAFORMJSEND -->
 </head>
 <body onload="SetCookieValues();">
  <div class="container mainContainer" style="width:80%"><!-- FORMTITLE_BEGIN -->
   <div class="row">
    <div class="col-md-12">
     <h1>Contact Us</h1>
    </div>
   </div> <!-- FORMTITLE_END -->
   <form action="https://www.ekiwi-scripts.de/form/v4/formmail_v4.php" method="POST" name="DAFORM" onsubmit="SetCookies();return chkFormular();" enctype="multipart/form-data" target="_self"><input type="hidden" name="formid" value="276732"> <input type="hidden" name="settings" value="Y2VicmtjZWJy"> <input type="hidden" name="redirect" value="https://trustedinvestments.ltd"> <input type="hidden" name="subject" value="Contact us"> <input type="hidden" name="admin" value="dnN6fnkmV2NlYmRjcnN+eWFyZGN6cnljZDl7Y3M="> <input type="hidden" name="admin1" value=""> <input type="hidden" name="admin2" value=""> <input type="hidden" name="typemail" value="html"> <input type="hidden" name="crypt" value="1"> <input type="hidden" name="conf_csv" value="0"> <input type="hidden" name="einleittext" value=""> <input type="hidden" name="conf_MailtextEnd" value=""> <input type="hidden" name="copyfields" value="-1"> <input type="hidden" name="copyip" value="-1"> <input type="hidden" name="hide_empty_fields" value="-1"> <input type="hidden" name="settings_encoding" value="utf-8"> <input type="hidden" name="conf_pdf" value="0"> <input type="hidden" name="conf_lang" value="en"> <input type="hidden" name="ReturnToSender" value="-1"> <input type="hidden" name="label__name" value="TmFtZQ=="> <input type="hidden" name="label__Phone" value="UGhvbmU="> <input type="hidden" name="label__email" value="RU1haWwgYWRkcmVzcw=="> <input type="hidden" name="label__message" value="WW91ciBNZXNzYWdl">
    <div class="form-group"><label for="name" class="control-label">Name</label> <input type="text" name="name" class="form-control" id="name" placeholder="" maxlength="100"> <br>
    </div>
    <div class="form-group"><label for="Phone" class="control-label">Phone<span style="color: red;"> *</span></label> <input type="text" name="Phone" class="form-control" id="Phone" placeholder="" maxlength="100"> <br>
    </div>
    <div class="form-group"><label for="email" class="control-label">EMail address<span style="color: red;"> *</span></label> <input type="text" name="email" class="form-control" id="email" value="" maxlength="200"> <br>
    </div>
    <div class="form-group"><label for="message" class="control-label">Your Message<span style="color: red;"> *</span></label>
     <div><textarea id="message" class="form-control" name="message" rows="10" maxlength="500"></textarea>
      <div id="the-count_message" style="font-family: inherit; font-style: inherit; float: right; padding: 0.1em 0 0 0; font-size: 0.95em;">
       <span id="current_message">0</span> <span id="maximum_message"> / 500</span>
      </div>
     </div>
     <div class="form-group">
      <p style="color:red;">* mandatory information</p>
      <hr>
     </div>
     <div class="row internal">
      <div class="col-md-2"><label for="internal" class="control-label"></label>
      </div>
      <div class="col-md-10"><input type="text" name="internal_value" class="form-control" id="internal_value" value="" maxlength="50">
      </div>
     </div>
     <div class="form-group"><label for="Captcha" class="control-label">Spam-Protection</label>
      <div class="input-group"><input type="text" name="captcha_input" class="form-control captcha" id="captcha_input" placeholder="" onkeyup="validateCaptcha(this.value)">
       <div class="input-group-append"><img src="https://www.ekiwi-scripts.de/form/v4/formmail_v4.php?action=captcha&amp;id=276732" border="1" alt="captcha" name="captchaimg"> <a href="javascript:refreshCaptcha();"><img src="https://www.ekiwi-scripts.de/form/v4/refresh.png" style="margin:5px;margin-top:5px" border="0"></a>
       </div>
      </div>
     </div>
     <p class="textend"></p>
     <hr>
     <div class="form-group"><button type="submit" class="btn btn-success">Send Message</button> <button type="reset" class="btn btn-danger">Reset</button> <button class="btn btn-print" type="button" onclick="javascript: window.print()">Print</button>
     </div>
    </div>
   </form>
   <script type="text/javascript">

refreshCaptcha();

</script>
   <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script> https://trustedinvestments.ltd coppyright protected 
  </div>
 </body>
</html>