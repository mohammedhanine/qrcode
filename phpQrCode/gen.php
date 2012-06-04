<?php
(isset($_POST['tip'])?'':$_POST['tip']='url');
$level="L";
$size=5;
$data="";

if(($_POST['tip']=='vcart') && (isset($_POST['name']))){
   $name=$_POST['name'];
   $comp=$_POST['comp'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $addrs=$_POST['addrs'];
   $addrs2=$_POST['addrs2'];
   $Website=$_POST['Website'];
   $Memo=$_POST['Memo'];
   /*data*/
    $data="MECARD:N:".$name.";ORG:".$comp.";TEL:".$phone.";URL:".$Website.";EMAIL:".$email.";ADR:".$addrs." ".$addrs2.";NOTE:".$Memo.";;";
}elseif(($_POST['tip']=='url') && (isset($_POST['url']))){
   $url=$_POST['url'];
   /*data*/
   $data=$url;
}elseif(($_POST['tip']=='sms') && (isset($_POST['phone']))){
    $phone=$_POST['phone'];
    $sms=$_POST['sms'];
    $data="smsto:".$phone.":".$sms;
}elseif(($_POST['tip']=='text') && (isset($_POST['text']))){
    $text=$_POST['text'];
    $data=$text;
}elseif(($_POST['tip']=='phone') && (isset($_POST['phone']))){
    $phone=$_POST['phone'];
    /*data*/
    $data="tel:".$phone;
}elseif(($_POST['tip']=='wifi') && (isset($_POST['ssid']))){
    $ssid=$_POST['ssid'];
    $pass=$_POST['pass'];
    $type=$_POST['type'];
    /*data*/
    $data="WIFI:S:".$ssid.";T:".$type.";P:".$pass.";;";
}elseif(($_POST['tip']=='email') && (isset($_POST['email']))){
    $email=$_POST['email'];
    /*data*/
    $data="mailto:".$email;
}elseif(($_POST['tip']=='geom') && (isset($_POST['latitude']))){
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $query=$_POST['query'];
    /*data*/
    $data="geo:".$latitude.",".$longitude."?q=".$query;
}
   //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "phpqrcode/qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'empty.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_POST['level']) && in_array($_POST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_POST['level'];

    $matrixPointSize = 4;
    if (isset($_POST['size']))
        $matrixPointSize = min(max((int)$_POST['size'], 1), 10);
if (trim($data) == ''){
      echo '<span style="color:#ff1020">دون معلومات </span> إختر نوعية الترميز <br/>';
      QRcode::png('http://www.arlinux.net', $filename, $errorCorrectionLevel, $matrixPointSize, 2);  
}else{
   // user data
        $filename = $PNG_TEMP_DIR.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
}
//display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><br/>';
    echo "لتحميل إضغط بزر اليمين للفأرة وإختر حفض";
    
    // benchmark
    //QRtools::timeBenchmark();
?>