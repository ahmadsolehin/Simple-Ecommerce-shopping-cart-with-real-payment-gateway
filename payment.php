<?php 
session_start(); 
session_destroy();
?>

<!DOCTYPE html>
<html>

<body>
<!DOCTYPE html>
<html>

<body>
   <head>
   <title>GENEVE STORE</title>
   </head>
   
        <div class="wrapper">
	<div class="heading">
	<div>

	<table>
	<th><h1>GENEVE STORE</h1></th>
	<th><input type="text" name="search" placeholder="Search for products ,brands, shops" style="width:400px;height:40px;"></th>
	<th>
	<a href="https://www.youtube.com/watch?v=umxZ_nqzxNk" target="_blank">
 	<img src="YTube.png" alt="youtube" style="width:20px;height:20px;"></a>
	<a href="https://instagram-for-chrome.en.softonic.com/" target="_blank">
 	<img src="instagram.png" alt="insta" style="width:20px;height:20px;"></a>
	<a href="https://www.facebook.com/about/login/" target="_blank">	
 	<img src="fb.png" alt="fb" style="width:20px;height:20px;"></a>
	<a href="https://twitter.com/laptopmag?lang=en" target="_blank">
 	<img src="b.png" alt="twit" style="width:20px;height:20px;"></a> 
	</th>
	</table>
	</div>
	</div>


	<div class="navigation">
	<ul>
	<li><a href="home.php" target="">HOME</a></li>
	<li><a href="list_b.php">LIST</a></li>	
	<li><a href="Order.php">ORDER</a></li>
	<li><a href="payment.php">PAYMENT</a></li>
	<li><a href="login.php">LOGIN</a></li>
	<li><a href="about.php">ABOUT US</a></li>
	</ul>
	</div>
		
		
		<div class="content">	
			
			
		<html>

<head>
<title>&nbsp; - Get Your order Here!</title>
<script language=javascript>
<!--//

function dm(amount) 
{
  string = "" + amount;
  dec = string.length - string.indexOf('.');
  if (string.indexOf('.') == -1)
  return string + '.00';
  if (dec == 1)
  return string + '00';
  if (dec == 2)
  return string + '0';
  if (dec > 3)
  return string.substring(0,string.length-dec+3);
  return string;
}



function calculate()
{

  QtyA = 0;  QtyB = 0;  QtyC = 0; QtyD = 0; QtyE = 0;
  TotA = 0;  TotB = 0;  TotC = 0; TotD = 0; TotE = 0; 

  PrcA = 3.00; PrcB = 2.50; PrcC = 4.50; PrcD = 3.50; PrcE = 3.00; 

 
 
  if (document.ofrm.qtyA.value > "")
     { QtyA = document.ofrm.qtyA.value };
  document.ofrm.qtyA.value = eval(QtyA);  
 
  if (document.ofrm.qtyB.value > "")
     { QtyB = document.ofrm.qtyB.value };
  document.ofrm.qtyB.value = eval(QtyB);  
 
  if (document.ofrm.qtyC.value > "")
     { QtyC = document.ofrm.qtyC.value };
  document.ofrm.qtyC.value = eval(QtyC);
  
  if (document.ofrm.qtyD.value > "")
     { QtyD = document.ofrm.qtyD.value };
  document.ofrm.qtyD.value = eval(QtyD);
  
  if (document.ofrm.qtyE.value > "")
     { QtyE = document.ofrm.qtyE.value };
  document.ofrm.qtyE.value = eval(QtyE);
  

 
 
  TotA = QtyA * PrcA;
  document.ofrm.totalA.value = dm(eval(TotA));
 
  TotB = QtyB * PrcB;
  document.ofrm.totalB.value = dm(eval(TotB));
 
  TotC = QtyC * PrcC;
  document.ofrm.totalC.value = dm(eval(TotC));
  
  TotD = QtyD * PrcD;
  document.ofrm.totalD.value = dm(eval(TotD));
  
  TotE = QtyE * PrcE;
  document.ofrm.totalE.value = dm(eval(TotE));
  
 
 
 
  Totamt = 
     eval(TotA) +
     eval(TotB) +
	 eval(TotC) +
	 eval(TotD) +
	 eval(TotE) ;
	
    
  document.ofrm.GrandTotal.value = dm(eval(Totamt));
  
} 


//-->
</script>




    <script>
    window.webtrendsAsyncInit=function(){
        var dcs=new Webtrends.dcs().init({
            dcsid:"dcs37pv2c00000oun93vypyva_4k6d",
            domain:"www.qsstats.com",
            timezone:-8,
            i18n:true,
            onsitedoms:"htmlgoodies.com",
            fpcdom:".htmlgoodies.com",
            plugins:{
                //hm:{src:"//s.webtrends.com/js/webtrends.hm.js"}
            }
            }).track();
    };
    (function(){
        var s=document.createElement("script"); s.async=true; s.src="/imageserver/common/v10/webtrends.min.js";    
        var s2=document.getElementsByTagName("script")[0]; s2.parentNode.insertBefore(s,s2);
    }());
    </script>
    <noscript><img alt="dcsimg" id="dcsimg" width="1" height="1" src="//www.qsstats.com/dcs37pv2c00000oun93vypyva_4k6d/njs.gif?dcsuri=/legacy/beyond/webmaster/projects/3withcotf3.html&amp;WT.js=No&amp;WT.tv=10.4.1&amp;dcssip=www.htmlgoodies.com&amp;WT.qs_dlk=WEQ-1QrIZ7wAAHcsVOgAAAAG&"/></noscript>
</head>

<body bgcolor="#FFFFCC">


		
		
		
	
	<div>	
	<table border="0" cellpadding="0" width="550" id="table1">

<tr>
<td>Your Total :</td>
<td><input type="text" name="text_name" size="40"></td>
</tr>	
<tr>
<td>Your name:</td>
<td><input type="text" name="text_name" size="40"></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" name="matric_number" size="40"></td>
</tr>

<tr>
<td>Phone No:</td>
<td><input type="text" name="text_course"></td>
</tr>

<tr>
<td>note:</td>
<td><input type="text" name="home_address" size="40" width="100"></td>
</tr>
		
</table>	
		<table summary="" class="form-address-table" border="0" cellpadding="4" cellspacing="0">
            <tr>
              <th colspan="2" style="text-align: left;">
                Payment Method
              </th>
            </tr>
            <tr>
              <td style="min-width:50px;vertical-align:top;" rowspan="2">
                <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_credit" name="q3_menuList[paymentType]" checked="checked" value="credit" />
                <label for="input_3_paymentType_credit">
                  <div style="display:inline-block; padding-right: 4px;">
                    <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_visa" style="display: inline-block;vertical-align:middle;" />
                    <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_mc" style="display: inline-block;vertical-align:middle;" />
                    <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_amex" style="display: inline-block;vertical-align:middle;" />
                    <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_dc" style="display: inline-block;vertical-align:middle;" />
                  </div>
                </label>
              </td>
              <td style="padding-bottom: 2px !important;text-align: left;vertical-align:top;">
                <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_express" name="q3_menuList[paymentType]" checked="checked" value="express" />
                <label for="input_3_paymentType_express"> <img style="vertical-align:middle;" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-small.png" /> </label>
              </td>
            </tr>
          </table>
          <table summary="" style="display" id="creditCardTable" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <th colspan="2" style="text-align: left;" id="ccTitle3">
                Credit Card (PayPal does not to fill in.)
              </th>
            </tr>
            <tr>
              <td width="50%">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <label class="form-sub-label" for="input_3_cc_firstName" id="sublabel_cc_firstName" style="min-height: 13px; margin: 0 0 3px 0;"> First Name </label>
                  <input class="form-textbox cc_firstName" type="text" name="q3_menuList[cc_firstName]" id="input_3_cc_firstName" size="20" />
                </span>
              </td>
              <td width="50%">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <label class="form-sub-label" for="input_3_cc_lastName" id="sublabel_cc_lastName" style="min-height: 13px; margin: 0 0 3px 0;"> Last Name </label>
                  <input class="form-textbox cc_lastName" type="text" name="q3_menuList[cc_lastName]" id="input_3_cc_lastName" size="20" />
                </span>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <label class="form-sub-label" for="input_3_cc_number" id="sublabel_cc_number" style="min-height: 13px; margin: 0 0 3px 0;"> Credit Card Number </label>
                  <input class="form-textbox cc_number" type="number" name="q3_menuList[cc_number]" id="input_3_cc_number" size="20" autocomplete="off" />
                  -
                </span>
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <label class="form-sub-label" for="input_3_cc_ccv" id="sublabel_cc_ccv" style="min-height: 13px; margin: 0 0 3px 0;"> Security Code </label>
                  <input class="form-textbox cc_ccv" type="number" name="q3_menuList[cc_ccv]" id="input_3_cc_ccv" style="width:52px" autocomplete="off" />
                </span>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <label class="form-sub-label" for="input_3_cc_exp_month" id="sublabel_cc_exp_month" style="min-height: 13px; margin: 0 0 3px 0;"> Expiration Month </label>
                  <select class="form-dropdown cc_exp_month" name="q3_menuList[cc_exp_month]" id="input_3_cc_exp_month">
                    <option>  </option>
                    <option value="January"> January </option>
                    <option value="February"> February </option>
                    <option value="March"> March </option>
                    <option value="April"> April </option>
                    <option value="May"> May </option>
                    <option value="June"> June </option>
                    <option value="July"> July </option>
                    <option value="August"> August </option>
                    <option value="September"> September </option>
                    <option value="October"> October </option>
                    <option value="November"> November </option>
                    <option value="December"> December </option>
                  </select>
                  /
                </span>
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <label class="form-sub-label" for="input_3_cc_exp_year" id="sublabel_cc_exp_year" style="min-height: 13px; margin: 0 0 3px 0;"> Expiration Year </label>
                  <select class="form-dropdown cc_exp_year" name="q3_menuList[cc_exp_year]" id="input_3_cc_exp_year">
                    <option>  </option>
                    <option value="2016"> 2016 </option>
                    <option value="2017"> 2017 </option>
                    <option value="2018"> 2018 </option>
                    <option value="2019"> 2019 </option>
                    <option value="2020"> 2020 </option>
                    <option value="2021"> 2021 </option>
                    <option value="2022"> 2022 </option>
                    <option value="2023"> 2023 </option>
                    <option value="2024"> 2024 </option>
                    <option value="2025"> 2025 </option>
                  </select>
                </span>
              </td>
            </tr>
            <tr>
              <th colspan="2" style="text-align: left;">
                Billing Address 
              </th>
            </tr>
            <tr>
              <td colspan="2">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <input class="form-textbox form-address-line" type="text" name="q3_menuList[addr_line1]" id="input_3_addr_line1" />
                  <label class="form-sub-label" for="input_3_addr_line1" id="sublabel_3_addr_line1" style="min-height: 13px;"> Street Address </label>
                </span>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <input class="form-textbox form-address-line" type="text" name="q3_menuList[addr_line2]" id="input_3_addr_line2" size="46" />
                  <label class="form-sub-label" for="input_3_addr_line2" id="sublabel_3_addr_line2" style="min-height: 13px;"> Street Address Line 2 </label>
                </span>
              </td>
            </tr>
            <tr>
              <td width="50%">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <input class="form-textbox form-address-city" type="text" name="q3_menuList[city]" id="input_3_city" size="21" />
                  <label class="form-sub-label" for="input_3_city" id="sublabel_3_city" style="min-height: 13px;"> City </label>
                </span>
              </td>
              <td>
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <input class="form-textbox form-address-state" type="text" name="q3_menuList[state]" id="input_3_state" size="22" />
                  <label class="form-sub-label" for="input_3_state" id="sublabel_3_state" style="min-height: 13px;"> State / Province </label>
                </span>
              </td>
            </tr>
            <tr>
              <td width="50%">
                <span class="form-sub-label-container" style="vertical-align: top;">
                  <input class="form-textbox form-address-postal" type="text" name="q3_menuList[postal]" id="input_3_postal" size="10" />
                  <label class="form-sub-label" for="input_3_postal" id="sublabel_3_postal" style="min-height: 13px;"> Postal / Zip Code </label>
                </span>
              </td>
             
            </tr>
          </table>
        </div>
      </li>
      <p>&nbsp;</p>
	<table border="0" cellpadding="0" width="550" id="table3">
		<tr>
			<td width="563">
			<p align="center">
			<button type="button" onclick="window.alert('Thank You. Your submitted have been received.')">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="reset" value="Reset" name="resetButton" tabindex="50"></td>
		</tr>
	</table>
	  
	</div>	
		
		
	</table>
	
	
	
	
	

	</table>



</form>

<p>&nbsp;</p>

	
		



<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F63382277461460" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F63382277461460" title="oEmbed Form">
<meta property="og:title" content="PayPal Pro Payment Form" >
<meta property="og:url" content="http://www.jotform.me/form/63382277461460" >
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>PayPal Pro Payment Form</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.15881" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.15881" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.15881" />
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:false;
    }

    .form-all{
        margin:0px auto;
        padding-top:20px;
        width:590px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>
</head>
</html>	
	


		<div class="footer">
		<table>
		<tr>
			<th>Address</th>
			<th>Contact</th>
			<th>Hours</th>
		</tr>
		<tr>
			<td>UMP</td>
			<td>0123456779</td>
			<td>24 Hours</td>
		</tr>
		</table>
		     © 2023 by GENEVE STORE
		</div>
   
		
	</body>	
</body>	

<style type="text/css">
*
table 	{
   	 font-family: arial, sans-serif;
   	 border-collapse: collapse;
    	width: 100%;
	}

td, th 	{
    	padding: 5px;
	}

body 	{
    	background-image: url("q3.jpg");
	}

.wrapper{
    	width: 1000px;
    	padding: 12px 20px;
    	margin: 0 auto 0 auto;
	}

.heading{
    	height: 50%;
    	background:#09374D;
    	padding: 10px;
	border-radius: 10px;
    	text-align: center;
	font-family:Brush Script Std;
	font-size:16pt;
    	color:#FFFFFF;
    	text-syadow: 1.4em 1.4em red;
	border: 5px solid black;
    	opacity: 2;
	filter:alpha (opacity=50);	
	}

p{
   margin-top:15px;
   font-family:georgia;
   padding:10px;
}

.title	{
      	font-family:serif;
	font-size:18pt;
	background:#3ff922;
	color:#3a3ad1;
	padding:10px;
	display: block;
	}

.navigation{
    	height:70px;
    	background:#09374D;
	margin-top: 10px;
	margin-bottom: 20px;
	border-radius: 10px;
	padding: 0.5px;
	font-family:impact;
	font-size:18pt;
	border: 4px solid black;
	opacity:1;
	filter:alpha (opacity=50);	
	}

.navigation ul li{
   	 display: inline;
	margin-right:77px;
	padding:6px;
		}

.navigation a{
    color:#FFFFFF;
	text-decoration: none;
	
}
.navigation a:hover{
    	color:black;
	text-decoration: underline;
	}

.con	{
    float: left;
	}

.content{

	font-style: italic;
	font-style: bold;
	font-size:16pt;
	text-align: center;
	background-color:#F1F4F4;}

.content{
    	min-height: 1000px;
    	width: 100%;
	margin-top: 10px;
	margin-bottom: 10px;
	border: 4px solid #00a005;
	}



.footer{
width: 100%;
   	 clear:both;
	background:#09374D;
	height:80px;
	color:#FFFFFF;
	text-align: center;
	padding: 10px;
	border: 3px solid black;
	border-radius: 10px;
	opacity:1;
	}

</style>
</html>

