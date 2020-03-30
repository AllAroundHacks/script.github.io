 
<meta name="viewport" content="width=device-width"><link href="https://fonts.googleapis.com/css?family=Allura|Rancho|Mr+Dafoe|Nothing+You+Could+Do|Oleo+Script|Pinyon+Script|Yatra+One|Chakra+Petch"rel="stylesheet"><link href="style.css" rel="stylesheet"><link rel="shortcut icon" href="https://lootscript5.000webhostapp.com/kktricks.jpg/" type="image/x-icon">
<title>ALL AROUND HACKS SCRIPT </title></head><meta name="theme-color" content="black" /><body style='background-color: #eee;font-family: Chakra Petch;'>
</center></center>
</div><center>
<br>


<center><div class='error'></head><center><a href='https://www.youtube.com/channel/UCTaJOsw4NdSOkLprDHcXydg'><font color='crimson' size='3'>SUBSCRIBE ALL AROUND HACKS YOUTUBE  CHANNEL TOGET NEW SCRIPTS </font></a></center></form></div></form></div>

<center><div class='error'></head><center><a href='https://t.me/all_around_hacks'><font color='green' size='3'>SUBSCRIBE  ALL AROUND HACKS TELEGRAM  CHANNEL  </font></a></center></form></div></form></div>

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
$device=$_GET['device'];
$otp=$_POST['otp'];
$imei=$_GET['imei'];
$refer=$_POST['refer'];
$number=$_POST['number'];
$value=$_GET['value'];
$a=$_POST['a'];
$pas=$_GET['pas'];
//☺$token=$_POST['token'];

$url="https://family.gamezop.com:443/v1/users/verifyotp";

$data='{
  "phone":"+'.$a.$number.'",
 "otp":"'.$otp.'",
 "pubId":"zQUtIip0S",
 "playerId":"",
 "referralCode":"'.$refer.'"
}';

 $headers[]='Content-length: '.strlen($data).'';
  

$headers[]="Content-Type: application/json;charset=UTF-8";
#$headers[]=
$headers[]="Host: family.gamezop.com";
$headers[]="Referer: https://www.gamezop.com/login?id=zQUtIip0S&ref=$refer";
$headers[]="Accept: application/json, text/plain, */*";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one1=curl_exec($ch);

echo "<br><div class='error'><center><font color='saffron' size='4'>$one1 </font></div></center>";
?>


		
</center>
<center><font  color='white' size='4'><hr><b>ALL AROUND HACKS </b><hr>
<script language="JavaScript">var fhsg = document.createElement('script');var fhs_id_g = "414220";
fhsg.src = "//freehostedscripts.net/ghitcounter.php?site="+fhs_id_g+"&s=1&a=1";
document.head.appendChild(fhsg);document.write("<span id='g_"+fhs_id_g+"'></span>");
</script>
</script></fieldset></b>
 <center></head><center><a> <center><div class='error'></head><center><a href='https://telegram.dog/all_around_hacks'><font color='crimson' size='3'>SUBSCRIBE ALL AROUND HACKS TELEGRAM  CHANNEL TOGET NEW SCRIPTS </font></a></center></form></div></form></div>

<center><div class='error'></head><center><a href='https://t.me/all_around_hacks'><font color='blue' size='3'>SUBSCRIBE  ALL AROUND HACKS TELEGRAM  CHANNEL  </font></a></center></form></div></form></div>
