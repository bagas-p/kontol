<?php
error_reporting(0);
system('clear');
system('rm rf .kontol.php');
kontol(){
system('clear')
function timer($timer){
date_default_timezone_set('UTC');
$tim = time()+$timer;
$blue="\033[34m";$cyn="\033[36m";
$blet="\033[92m";$putih="\033[1;97m";
$bpur="\033[35m";$m="\033[31m";
$bhj="\033[33m";$nyr="\033[8m";
$rm="\033[0"."m";
$wrn=[$putih,$m];
$i=0;
$randw=[$blet,$bhj,$cyn,$blet,$bhj,$cyn];$x=1;
while(true):
echo "\r                                                        \r";
$wsl=$wrn[$i];
$tm = $tim-time();
$date=date("H:i:s",$tm);
if($tm<1){ break; }
$str=str_repeat("▶",$x);$stran=$randw[$x-1];
$as="strtime ";$cls="]";
echo "$putih Please Wait","$putih [$wsl$date$putih$cls $stran$str";
if($x==5){$x=1;}else{$x++;} sleep(1);
$i++;
if($i >= count ($wrn)){$i=0;}
endwhile;
 }




function banner($script){
$api = json_decode(file_get_contents("http://ip-api.com/json"),true);
$timezone=$api["timezone"];
$country=$api["country"];
$ip=$api["query"];
date_default_timezone_set("$timezone");
echo "\033[1;97m";
echo Slow(str_repeat('─',65)."\n");
echo slow("\033[0;31m╔══╗╔═══╗─────╔╗╔═══╗  \033[1;32m|•\033[1;31mScript For  \033[1;32m▶▶ \033[1;97m$script
\033[0;31m║╔╗║║╔═╗║────╔╝║║╔═╗║  \033[1;32m|•\033[1;31mCreator     \033[1;32m▶▶ \033[1;97mBagas Prasetyo
\033[0;31m║╚╝╚╣╚═╝║────╚╗║╚╝╔╝║  \033[1;32m|•\033[1;31mGrup tele   \033[1;32m▶▶ \033[1;97mt.me/bagasp1205cps
\033[1;37m║╔═╗║╔══╝╔══╗─║║╔═╝╔╝  \033[1;32m|•\033[1;31mThanks to   \033[1;32m▶▶ \033[1;97mbang Iewil,bang ferdy
\033[1;37m║╚═╝║║───╚══╝╔╝╚╣║╚═╗  \033[1;32m|•\033[1;31mDonate      \033[1;32m▶▶ \033[1;97mbagasp1205 [faucetpay]
\033[1;37m╚═══╩╝───────╚══╩═══╝  \033[1;32m|•\033[1;31mNote        \033[1;32m▶▶ \033[1;92mScript Not For Sale!\n\033[1;97m");
echo Slow(str_repeat('─',65)."\n");
echo "\033[1;97m•Date : ";
echo date('D, d-m-Y');
echo "   •IP : $ip  •Time : ".date('H:i:s')."\n";
echo Slow(str_repeat('─',65)."\n");
echo " Please Subscribe🙏\r";
sleep(3);
system('termux-open https://youtube.com/c/BagasPrasetyo12');
echo " Thanks🙏                  \r";
sleep(8);
}



function Slow($msg){$slow = str_split($msg);
	foreach( $slow as $slowmo ){ echo $slowmo; usleep(10000);}}

function load($data, $file){
$handle = fopen($file, 'w');
fwrite($handle, $data);
fclose($handle);
}



function Save($namadata){
	if(file_exists($namadata)){
		$data = file_get_contents($namadata);
	}else{
		$data = readline("\033[102m\033[1;34m Input ".$namadata."\033[0m\n ▶▶ ");
		file_put_contents($namadata,$data);
	}
	return $data;
}

echo "\033[0;31m╔══╗╔═══╗─────╔╗╔═══╗   
\033[0;31m║╔╗║║╔═╗║────╔╝║║╔═╗║   
\033[0;31m║╚╝╚╣╚═╝║────╚╗║╚╝╔╝║   
\033[1;37m║╔═╗║╔══╝╔══╗─║║╔═╝╔╝   
\033[1;37m║╚═╝║║───╚══╝╔╝╚╣║╚═╗ 
\033[1;37m╚═══╩╝───────╚══╩═══╝  \n";

$api = Save("user-agent");
$wallet = save("wallet");
echo Slow("  \033[1;97mCeking Data \033[1;31m•\r");
sleep(1);
echo Slow("  \033[1;97mCeking Data \033[1;31m••\r");
sleep(1);
echo Slow("  \033[1;97mCeking Data \033[1;31m•••\r");
sleep(1);
echo Slow("  \033[1;97mCeking Data \033[1;31m••••\r");
sleep(1);
echo Slow("  \033[1;97mCeking Data \033[1;31m•••••\r");
sleep(1);
system('clear');

function curl($url, $post = 0, $httpheader = 0, $proxy = 0){
$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
//        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
//        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
//            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }


function head(){
$ua[]="Host: nfiles.xyz";
$ua[]="Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$ua[]="Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
$ua[]="Upgrade-Insecure-Requests: 1";
$ua[]="User-Agent: $api";
  return $ua;
}


banner("unlifey");
echo Slow("\033[1;91m ∆ \033[1;97mYour Faucetpay Email \033[1;32m▶▶\033[1;91m $wallet \n\033[1;97m");
echo Slow(str_repeat('─',65)."\n");
lanjut:
$res = curl('https://nfiles.xyz/fey/', null, head())[1];
$p = explode("'",explode("type='submit' value='Claim' name='",$res)[1])[0];
$data = "d1=$wallet&$p=Claim";
$res = curl('https://nfiles.xyz/fey/', $data, head())[1];
$suc = explode(' <a href="/cdn-cgi/l/email-',explode('<h3>',$res)[1])[0];
$sts = explode('<',explode('<h3 style="color:red;">',$res)[1])[0];
if($suc){
echo Slow("\033[1;91m ∆\033[1;32m $suc \033[1;97mFaucetpay.io\n");
echo Slow(str_repeat('─',65)."\n");
timer(55);
goto lanjut;
}else{
echo Slow(" $sts  \r");
goto lanjut;
}
}
