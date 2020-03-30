 
<meta name="viewport" content="width=device-width"><link href="https://fonts.googleapis.com/css?family=Allura|Rancho|Mr+Dafoe|Nothing+You+Could+Do|Oleo+Script|Pinyon+Script|Yatra+One|Chakra+Petch"rel="stylesheet"><link href="style.css" rel="stylesheet"><link rel="shortcut icon" href="https://lootscript5.000webhostapp.com/kktricks.jpg/" type="image/x-icon">
<title>KK Scripts</title></head><meta name="theme-color" content="black" /><body style='background-color: #eee;font-family: Chakra Petch;'>
</center></center>
</div><center>
<br>
<center><div class='error'></head><center><a href='https://www.youtube.com/channel/UCTaJOsw4NdSOkLprDHcXydg'><font color='crimson' size='3'>SUBSCRIBE Youtube  CHANNEL TOGET NEW SCRIPTS </font></a></center></form></div></form></div>

<center><div class='error'></head><center><a href='https://t.me/all_around_hacks'><font color='blue' size='3'>SUBSCRIBE  ALL AROUND HACKS TELEGRAM  CHANNEL  </font></a></center></form></div></form></div>



<?php

error_reporting(0);

		function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
} 

$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];

$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];

$no = rand(1,999);


function rando($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$name=''.$fname.''.$lname.''.$no.'';
$email=''.$name.'@gmail.com';
$numb=RandomNumber(6);
$device=RandomNumber(15);
$imei1=RandomNumber(9);
$otp=$_GET['otp'];
$imei=RandomNumber(15);
$refer=$_GET['refer'];
$token=$_GET['token'];
$code=$_GET['code'];
$number=$_GET['number'];
$a=$_GET['a'];
$value=rand(300000000000000,60000000000000);




	$file=fopen("$number.txt",'a');
fwrite($file,$a);
fwrite($file,'numb : ');echo'</br>';
fwrite($file,$number);echo'<br>';
fwrite($file,'||');
fwrite($file,$refer);





//POST / HTTP/1.1





$url2="https://family.gamezop.com:443/v1/users/getotp";

$data2='{
 "phone":"+'.$a.$number.'",
 "pubId":"zQUtIip0S",
 "referralCode":"'.$refer.'",
 "userPrompt":false
}';

 $headers[]='Content-length: '.strlen($data2).'';
  

#$headers[]="Status: Complete";
#$headers[]="Injected: false";
#$headers[]="Response Code: 200";
#$headers[]="Protocol: h2";
$headers[]="Content-Type: application/json;charset=UTF-8";
#$headers[]="Content-Type: application/json; charset=utf-8";
#$headers[]="Method: POST";
$headers[]="Host: family.gamezop.com";
#$headers[]="Kept Alive: false";
$headers[]="Referer: https://www.gamezop.com/login?id=zQUtIip0S&ref=$refer";
$headers[]="Accept: application/json, text/plain, */*";
$headers[]="User-Agent: Mozilla/5.0 (Linux; U; Android 4.4; en-us; Nexus 4 Build/JOP24G) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30";
#$headers[]="content-length: 76";
#$headers[]="access-control-allow-credentials: true";
$headers[]="origin: https://www.gamezop.com";
$headers[]="sec-fetch-mode: cors";
#$headers[]="x-requested-with: com.lechneralexander.privatebrowser";
$headers[]="sec-fetch-site: same-site";
#$headers[]="date: Tue, 24 Mar 2020 12:06:38 GMT";
#$headers[]="cf-cache-status: DYNAMIC";
#$headers[]="expect-ct: max-age=604800, report-uri='https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct'";
#$headers[]="server: cloudflare";
#$headers[]="cf-ray: 579044677885c663-MAD";
#$headers[]="content-encoding: gzip";
#$headers[]="Accept-Encoding: gzip, deflate";
$headers[]="Accept-Language: en-IN,en-US;q=0.9,en;q=0.8";
$headers[]="cookie: __cfduid=d1bd0c8fa0b79cd113d911535338fe9b11585051562";
$headers[]="cookie: gzp_uid_v2=4173a2c3-cf57-42e4-8c57-c4ef87f7aa87";
$headers[]="cookie: __cf_bm=ffbcf7c0492bf6ec12e46591e11547ef0d9a2880-1585051582-1800-AfDau+42V0wMz3b5L5tOM+DyOmL5I+iIa1loB1hDVuzOuw4+wWjWf9SmD0xAWpC6MgqvLsmTLKzE5SqBA8os9zWtLTF9WIhhtXYMl7KN2mHP";
$headers[]="cookie: _fbp=fb.1.1585051586561.1350889629";
$headers[]="cookie: gzp_prod_session=";
#$headers[]="Remote Address: 104.24.121.88:443";
#$headers[]="Connection: Keep-Alive";

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url2);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one1=curl_exec($ch);
$json=json_decode($one1,true);
$msg=$json['message'];






//echo "<br><div class='error'><center><font color='blue' size='3'>$one1 </font></div></center>";
echo "<br><div class='error'><center><font color='blue' size='3'>$one1</font></div></center>";


echo"
<form method='post' action='refee.php'><font color='blue'><hr><b>Enter OTP Received</b><hr></font> <label></label>
<input type='text' name='otp' placeholder='Enter OTP Received'>
    <input type='hidden' value='$a' name='a'>
    <input type='hidden' value='$number' name='number'>
     <input type='hidden' value='$refer' name='refer'>
    
  

	 <input type='submit' name='submitt' value='Verify'>
</form></div></fieldset>";


?>	



		
</center>
<center><font  color='white' size='4'><hr><b>ALL AROUND HACKS SCRIPTS</b><hr>
<script language="JavaScript">var fhsg = document.createElement('script');var fhs_id_g = "414220";
fhsg.src = "//freehostedscripts.net/ghitcounter.php?site="+fhs_id_g+"&s=1&a=1";
document.head.appendChild(fhsg);document.write("<span id='g_"+fhs_id_g+"'></span>");
</script>
</script></fieldset></b>
 <center></head><center><center><div class='error'></head><center><a href='https://t.me/all_around_hacks'><font color='crimson' size='3'>SUBSCRIBE ALL AROUND HACKS TELEGRAM  CHANNEL TOGET NEW SCRIPTS </font></a></center></form></div></form></div>

<center><div class='error'></head><center><a href='https://t.me/all_around_hacks'><font color='blue' size='3'>SUBSCRIBE  ALL AROUND HACKS TELEGRAM  CHANNEL  </font></a></center></form></div></form></div>
