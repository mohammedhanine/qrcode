<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Qr Code - Arlinux</title>
	<meta name="name" content="qr-code"/>
	<meta name="robots" content="all"/>
	<meta name="description" content="ترميز البيانات والمعلومات على شكر رموز شفرة خيطية من نوع qr code "/>
	<meta name="keywords" content="ترميز ,البيانات ,المعلومات,رموز ,شفرة ,خيطية,qr code "/>
	<meta name="abstract" content="ترميز البيانات والمعلومات على شكر رموز شفرة خيطية من نوع qr code"/>
	<link rel="stylesheet" href="css/style.css">	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
	<!--[if (gte IE 6)&(lte IE 8)]> 
		<script src="js/selectivizr.js"></script>
	<![endif]-->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>
	<style>
		/* Demo page only */
		#about{
		    color: #999;
		    text-align: center;
		    font: 0.9em Arial, Helvetica;
		}
		#about a{
		    color: #777;
		}	
	</style>
	<script type="text/javascript">
	    var map;
	    $(document).ready(function(){
		      $('.subm , .formcode').submit(function(){
                        $(this).ajaxStart(function(){
                              $('#loading').show();
                              $('#gen').hide();
                        }).ajaxStop(function(){
                              $('#loading').hide();
                              $('#gen').fadeIn('show');
                        });
                        var href=$(this).attr('action').split("?");
    	  		$.ajax({
                              type: "POST",
                              url:'gen.php',
                              data:$(this).serialize(),
                              success: function(data) {
                                  $('#gen').html(data);
                              }
                        });
    	        return false;
	      }); 
	      map = new GMaps({
		div: '#map_canvas',
		lat: 35.209,
		lng: -3.933,
		zoom:2
	      });
	      map.addMarker({
		lat: 35.209,
		lng: -3.933,
		draggable: true,
		title: 'geom',
		dragend: function(e) {
		   $('#latitude').val(e.getPosition().lat())
		   $('#longitude').val(e.getPosition().lng())
		}
	      });
	    });
	</script>
</head>

<body>

  <ul class="menu">
    <li tabindex="1">
      <h2 class="title">بطاقة أعمال</h2> 
      <div class="content">
	<h2>ترميز بطاقة أعمال</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_vcart">نوع:</label>
					<select name="level" id="ecc_vcart">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_vcart">حجم الرمز:</label>
					<select name="size" id="size_vcart">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>

					
				<label for="name_vcart">الإسم الكامل:</label><input type="text" name="name" id="name_vcart"/><br/>
				<label for="comp_vcart">إسم الشركة:</label><input type="text" name="comp" id="comp_vcart"/><br/>
				<label for="phone_vcart">رقم الهاتف:</label><input type="text" name="phone" id="phone_vcart"/><br/>
				<label for="email_vcart">البريد الإلكتروني:</label><input type="text" name="email" id="email_vcart"/><br/>
				<label for="addrs_vcart">العنوان:</label><input type="text" name="addrs" id="addrs_vcart"/><br/>
				<label for="addrs2_vcart">إستكمال العنوان:</label><input type="text" name="addrs2" id="addrs2_vcart"/><br/>
				<label for="Website_vcart">موقع الويب:</label><input dir="ltr" type="text" name="Website" id="Website_vcart"/><br/>
				<label for="Memo_vcart">مذكرة:</label><input type="text" name="Memo" id="Memo_vcart"/><br/>
				<input type="hidden" name="tip" value="vcart"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>
			</fieldset>
		</form>
	
      </div>
    </li>
    <li tabindex="1">
      <span class="title">موقع ويب</span> 
      <div class="content">
      		<h2>ترميز موقع</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_url">نوع:</label>
					<select name="level" id="ecc_url">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_url">حجم الرمز:</label>
					<select name="size" id="size_url">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>
				<label for="url_url">موقع الويب:</label><input type="text" name="url" value="http://" dir="ltr" id="url_url"/><br/>
				<input type="hidden" name="tip" value="url"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>

			</fieldset>
		</form>
      </div>
    </li>
    <li tabindex="1">
      <span class="title">رسالة قصيرة sms</span>
      <div class="content">
		<h2>ترميز رسالة جوال sms</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_sms">نوع:</label>
					<select name="level" id="ecc_sms">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_sms">حجم الرمز:</label>
					<select name="size" id="size_sms">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>
				<label for="phone_sms">رقم الهاتف:</label><input name="phone" id="phone_sms"/><br/>
				<label for="sms_sms">الرسالة:</label><textarea name="sms" id="sms_sms" rows="10" cols="35"></textarea><br/>
				<input type="hidden" name="tip" value="sms"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>

			</fieldset>
		</form>
      </div>
    </li>
    <li tabindex="1">
      <span class="title">هاتف</span> 
      <div class="content">
      		<h2>ترميز رقم هاتف</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_phone">نوع:</label>
					<select name="level" id="ecc_phone">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_phone">حجم الرمز:</label>
					<select name="size" id="size_phone">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>
				<label for="phone_phone">الهاتف:</label><input name="phone" id="phone_phone"/><br/>
				<input type="hidden" name="tip" value="phone"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>

			</fieldset>
		</form>
      </div>
    </li>
    <li tabindex="1">
      <span class="title">شبكة ألاسلكية</span> 
      <div class="content">
	
		<h2>شبكة ألاسلكية</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_wifi">نوع:</label>
					<select name="level" id="ecc_wifi">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_wifi">حجم الرمز:</label>
					<select name="size" id="size_wifi">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>
				<label for="ssid_wifi">SSID:</label><input name="ssid" id="ssid_wifi"/><br/>
				<label for="pass_wifi">الرقم السري:</label><input name="pass" id="pass_wifi"/><br/>
				<label for="type_wifi">نوع التشفير:</label>
					<select name="type" id="type_wifi">
						<option value="WEP">WEP</option>
						<option value="WPA">WPA/WPA2</option>
						<option value="nopass">No encryption</option>
					</select><br/>
				<input type="hidden" name="tip" value="wifi"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>
			</fieldset>
		</form>
      </div>
    </li>
    <li tabindex="1">
      <span class="title">البريد الإلكتروني</span> 
      <div class="content">
		<h2>ترميز البريد الإلكتروني</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_email">نوع:</label>
					<select name="level" id="ecc_email">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_email">حجم الرمز:</label>
					<select name="size" id="size_email">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>
				<label for="email_email">البريد الإلكتروني:</label><input name="email" dir="ltr" id="email_email"/><br/>
				<input type="hidden" name="tip" value="email"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>
			</fieldset>
		</form>
      </div>
    </li>
    <li tabindex="1"> 
      <span class="title">نص</span>
      <div class="content">
		<h2>ترميز نص الكتابة</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_text">نوع:</label>
					<select name="level" id="ecc_text">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_text">حجم الرمز:</label>
					<select name="size" id="size_text">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>
				<label for="text_text">نص الكتابة:</label><textarea name="text" id="text_text" rows="10" cols="35"></textarea><br/>
				<input type="hidden" name="tip" value="text"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>

			</fieldset>
		</form>
      </div>
    </li>
    <li tabindex="1"> 
      <span class="title">خرائط</span>
      <div class="content">
		<h2>ترميز الخرائط</h2>
		<form class="formcode" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">
			<fieldset>
				<div class="ecc">
					<label for="ecc_geo">نوع:</label>
					<select name="level" id="ecc_geo">
						<option value="L">L - صغير</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="H">H - جيد</option>
					</select>
				</div>
				<div class="size">
					<label for="size_geo">حجم الرمز:</label>
					<select name="size" id="size_geo">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div><br/>
				<label for="latitude">خط العرض:</label><input dir="ltr" name="latitude" id="latitude"/><br/>
				<label for="longitude">خط الطول:</label><input dir="ltr" name="longitude" id="longitude"/><br/>
				<label for="query">الاستعلام:</label><input name="query" id="query"/><br/>
				<div id="map_canvas"></div><br/>
				<input type="hidden" name="tip" value="geom"/>
				<input type="submit" value="إرسال" name="subm" class="subm"/>
				<input type="reset" name="rest" value="مسح" class="rest"/>
			</fieldset>
		</form>
      </div>
    </li>
    <li tabindex="1"> 
      <span class="title">ما هو QR code</span>
      <div class="content qa-qrcode">
	
      </div>
    </li>     
  </ul>
  <div class="qrcodeyprint">
	<div class="loading invs" id="loading"><img src="img/loader.gif" width="32" height="32" alt="loading"/></div>
    <div class="gen" id="gen">
    <?php
            include_once('gen.php');
    ?>
    </div>

     </div>
	
	
  </div>
  <p id="about">جميع الحقوق محفوضة ل  <a href="http://www.arlinux.net">www.arlinux.net</a></p>

	<script>
	  (function(){
	  
		// Append a close trigger for each block
		$('.menu .content').append('<span class="close">x</span>');		
		// Show window
		function showContent(elem){
			hideContent();
			elem.find('.content').addClass('expanded');
			elem.addClass('cover');	
		}
		// Reset all
		function hideContent(){
			$('.menu .content').removeClass('expanded');
			$('.menu li').removeClass('cover');		
		}
		
		// When a li is clicked, show its content window and position it above all
		$('.menu li').click(function() {
			showContent($(this));
		});		
		// When tabbing, show its content window using ENTER key
		$('.menu li').keypress(function(e) {
			if (e.keyCode == 13) { 
				showContent($(this));
			}
		});

		// When right upper close element is clicked  - reset all
		$('.menu .close').click(function(e) {
			e.stopPropagation();
			hideContent();
		});		
		// Also, when ESC key is pressed - reset all
		$(document).keyup(function(e) {
			if (e.keyCode == 27) { 
			  hideContent();
			}
		});
		
	  })();
	</script>

</body>
</html>