<?php
//error_reporting(0);
system("clear");
//system("pkg install toilet -y");
$yt = "";
//color
$res = "\033[0m";
$hitam = "\033[0;30m";
$abu2 = "\033[1;30m";
$putih = "\033[0;37m";
$putih2 = "\033[1;37m";
$red = "\033[0;31m";
$red2 = "\033[1;31m";
$green = "\033[0;32m";
$green2 = "\033[1;32m";
$yellow = "\033[0;33m";
$yellow2 = "\033[1;33m";
$blue = "\033[0;34m";
$blue2 = "\033[ 1;34m";
$purple = "\033[0;35m";
$purple2 = "\033[1;35m";
$lblue = "\033[0;36m";
$lblue2 = "\033[1;36m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =  "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res = "\033[7m";
$hitam = "\033[0;30m";
$abu2 = "\033[1;30m";
$putih = "\033[0;37m";
$putih2 = "\033[1;37m";
$red = "\033[0;31m";
$red2 = "\033[1;31m";
$green = "\033[0;32m";
$green2 = "\033[1;32m";
$yellow = "\033[0;33m";
$yellow2 = "\033[1;33m";
$blue = "\033[0;34m";
$blue2 = "\033[1;34m";
$purple = "\033[0;35m";
$purple2 = "\033[1;35m";
$lblue = "\033[0;36m";
$lblue2 = "\033[1;36m";

$Color_Off = "\033[0m";
$Black = "\033[0;30m";
$Red = "\033[0;31m";
$Green = "\033[0;32m";
$Yellow = "\033[0;33m";
$Blue = "\033[0;34m";
$Purple = "\033[0;35m";
$Cyan = "\033[0;36m";
$White = "\033[0;37m";
$IYellow = "\033[0;93m";
$IRed = "\033[0;91m";
$BIRed = "\033[1;91m";
$On_Cyan = "\033[46m";
$BIWhite = "\033[1;97m";
$BIBlue = "\033[1;94m";
$BICyan = "\033[1;96m";
$BIBlack = "\033[1;90m";
$BBlack = "\033[1;30m";
$IBlack = "\033[0;90m";
$On_White = "\033[47m";
$BIBlue = "\033[1;94m";
$On_IRed = "\033[0;101m";
$On_Red = "\033[41m";
$On_Blue = "\033[44m";
$On_Green = "\033[42m";
$IGreen = "\033[0;92m";
$IYellow = "\033[0;93m";
$Icyan = "\033[0;96m";
//red to yellow shade ↓

$r3 = "\033[01;38;5;196m";
$r2 = "\033[01;38;5;202m";
$r1 = "\033[01;38;5;208m";
$ry = "\033[01;38;5;214m";
$y1 = "\033[01;38;5;220m";
$y2 = "\033[01;38;5;226m";
$y3 = "\033[01;38;5;228m";
/* END COLOR */




function url($url)
{
  $headers = array();
  $headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $res = curl_exec($ch);
  return $res;
}


error_reporting(0);
system("clear");


function an($str)
{
  $arr = str_split($str);
  foreach ($arr as $az) {
    echo $az;
    usleep(19999);
  }
}

include('cfg.php');

function Get($url, $ua)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_ENCODING, "");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
  sleep(1);
}

function Post($link, $ua, $data)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}
function timer($tmr)
{
  $hijaut = "\e[1;32m";
  $meraht = "\e[1;31m";
  $kuningt = "\e[1;33m";
  $putiht = "\e[1;37m";
  $birut = "\e[1;34m";
  $ungut = "\e[1;35m";
  $birumudat = "\e[1;36m";
  $warna = [$ungut, $birumudat, $hijaut, $ungut, $birut];
  $timr = time() + $tmr;
  while (true):
    echo "\r                           \r";
    $res = $timr - time();
    if ($res < 1) {
      break;
    }
    echo $putiht . "[" . $warna[array_rand($warna)] . "•••" . $putiht . "] " . gmdate("H:i:s", $res);
    sleep(1);
  endwhile;
}

ban();
// BAGIAN DASHBOARD BALANCE
$url = "https://lemeclaim.xyz/account.php";
$ua = [
  "user-agent: " . $UserAgent,
  "cookie: " . $Cookie
];

$wd = Get($url, $ua);
// BALANCE LTC
$man = explode('<td>', explode('</td>', $db)[1])[0];
$nual = explode('</td>', $man)[0];
$man1 = explode('<td>', $wd)[2];
$nual1 = explode('</td>', $man1)[0];
$man2 = explode('<td>', $wd)[3];
$nual2 = explode('</td>', $man2)[0];

// BALANCE DOGE
$man3 = explode('<td>', $wd)[4];
$nual3 = explode('</td>', $man3)[0];
$man4 = explode('<td>', $wd)[5];
$nual4 = explode('</td>', $man4)[0];
$man5 = explode('<td>', $wd)[6];
$nual5 = explode('</td>', $man5)[0];

// BALANCE DGB
$man6 = explode('<td>', $wd)[7];
$nual6 = explode('</td>', $man6)[0];
$man7 = explode('<td>', $wd)[8];
$nual7 = explode('</td>', $man7)[0];
$man8 = explode('<td>', $wd)[9];
$nual8 = explode('</td>', $man8)[0];

// BALANCE TRX
$man9 = explode('<td>', $wd)[10];
$nual9 = explode('</td>', $man9)[0];
$man10 = explode('<td>', $wd)[11];
$nual10 = explode('</td>', $man10)[0];
$man11 = explode('<td>', $wd)[12];
$nual11 = explode('</td>', $man11)[0];

// BALANCE USDT
$man12 = explode('<td>', $wd)[13];
$nual12 = explode('</td>', $man12)[0];
$man13 = explode('<td>', $wd)[14];
$nual13 = explode('</td>', $man13)[0];
$man16 = explode('<td>', $wd)[15];
$nual16 = explode('</td>', $man16)[0];

// BALANCE BCH
$man17 = explode('<td>', $wd)[16];
$nual17 = explode('</td>', $man17)[0];
$man18 = explode('<td>', $wd)[17];
$nual18 = explode('</td>', $man18)[0];
$man19 = explode('<td>', $wd)[18];
$nual19 = explode('</td>', $man19)[0];

// BALANCE DASH
$man20 = explode('<td>', $wd)[19];
$nual20 = explode('</td>', $man20)[0];
$man21 = explode('<td>', $wd)[20];
$nual21 = explode('</td>', $man21)[0];
$man22 = explode('<td>', $wd)[21];
$nual22 = explode('</td>', $man22)[0];

// BALANCE FEY
$man23 = explode('<td>', $wd)[22];
$nual23 = explode('</td>', $man23)[0];
$man24 = explode('<td>', $wd)[23];
$nual24 = explode('</td>', $man24)[0];
$man25 = explode('<td>', $wd)[24];
$nual25 = explode('</td>', $man25)[0];

// BALANCE ZEC
$man26 = explode('<td>', $wd)[25];
$nual26 = explode('</td>', $man26)[0];
$man27 = explode('<td>', $wd)[26];
$nual27 = explode('</td>', $man27)[0];
$man28 = explode('<td>', $wd)[27];
$nual28 = explode('</td>', $man28)[0];

// BALANCE SOL
$man29 = explode('<td>', $wd)[28];
$nual29 = explode('</td>', $man29)[0];
$man30 = explode('<td>', $wd)[29];
$nual30 = explode('</td>', $man30)[0];
$man31 = explode('<td>', $wd)[30];
$nual31 = explode('</td>', $man31)[0];

an($lblue2 . "Welcome Back Bossque 😎" . $and . "\n");
an($lblue2 . "Your Balance" . $and . "\n\n");
echo $lblue2 . "$nual" . $putih2 . "$lblue  $nual1";
echo $green2 . "     $nual17" . $putih2 . "$green2  $nual18";
echo "\n";
echo $yellow2 . "$nual3" . $putih2 . "$yellow2 $nual4";
echo $lblue2 . "     $nual20" . $putih2 . "$purple2 $nual21";
echo "\n";
echo $lblue2 . "$nual6" . $putih2 . "$lblue2  $nual7";
echo $purple2 . "     $nual23" . $putih2 . "$yellow2  $nual24";
echo "\n";
echo $r1 . "$nual9" . $putih2 . "$r1  $nual10";
echo $yellow2 . "     $nual26" . $putih2 . "$red2  $nual27";
echo "\n";
echo $y1 . "$nual12" . $putih2 . "$green2 $nual13";
echo $purple2 . "     $nual29" . $putih2 . "$yellow2  $nual30";
echo "\n";
an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
// BAGIAN WELCOME
$url = "https://lemeclaim.xyz/home.php?LTC=0&DOGE=0&DGB=0&TRX=0&USDT=0&BCH=0&DASH=1&FEY=0&ZEC=0&SOL=0&redirect=1";
$ua = [
  "user-agent: " . $UserAgent,
  "cookie: " . $Cookie
];
$th = Get($url, $ua);
$tmr0 = explode('clock.setTime(', $th)[1];
$tmr = explode(');', $tmr0)[0];
$home0 = explode('<title id="timer">', $th)[1];
$home = explode('| Home', $home0)[0];
//echo"{$hijau2}Welcome to ";echo"{$ry}{$home}";
// timer(60);
// // PERULANAGAN
// while (true) {


//   // BAGIAN CLAIM
//   $url = "https://lemeclaim.xyz/home.php?LTC=1&DOGE=0&DGB=1&TRX=1&USDT=0&BCH=0&DASH=0&FEY=0&ZEC=0&SOL=0&redirect=1";
//   $ua = [
//     "user-agent: " . $UserAgent,
//     "cookie: " . $Cookie
//   ];
//   $th = Get($url, $ua);
//   $tmr0 = explode('clock.setTime(', $th)[1];
//   $tmr = explode(');', $tmr0)[0];
//   $home0 = explode('<title id="timer">', $th)[1];
//   $home = explode('| Home', $home0)[0];

//   // BAGIAN UPDATE BALANCE
//   $url = "https://lemeclaim.xyz/account.php";
//   $ua = [
//     "user-agent: " . $UserAgent,
//     "cookie: " . $Cookie
//   ];
//   $wd = Get($url, $ua);
//   // BALANCE LTC
//   $man = explode('<td>', $wd)[1];
//   $nual = explode('</td>', $man)[0];
//   $man1 = explode('<td>', $wd)[2];
//   $nual1 = explode('</td>', $man1)[0];
//   $man2 = explode('<td>', $wd)[3];
//   $nual2 = explode('</td>', $man2)[0];

//   // BALANCE DOGE
//   $man3 = explode('<td>', $wd)[4];
//   $nual3 = explode('</td>', $man3)[0];
//   $man4 = explode('<td>', $wd)[5];
//   $nual4 = explode('</td>', $man4)[0];
//   $man5 = explode('<td>', $wd)[6];
//   $nual5 = explode('</td>', $man5)[0];

//   // BALANCE DGB
//   $man6 = explode('<td>', $wd)[7];
//   $nual6 = explode('</td>', $man6)[0];
//   $man7 = explode('<td>', $wd)[8];
//   $nual7 = explode('</td>', $man7)[0];
//   $man8 = explode('<td>', $wd)[9];
//   $nual8 = explode('</td>', $man8)[0];

//   // BALANCE TRX
//   $man9 = explode('<td>', $wd)[10];
//   $nual9 = explode('</td>', $man9)[0];
//   $man10 = explode('<td>', $wd)[11];
//   $nual10 = explode('</td>', $man10)[0];
//   $man11 = explode('<td>', $wd)[12];
//   $nual11 = explode('</td>', $man11)[0];

//   // BALANCE USDT
//   $man12 = explode('<td>', $wd)[13];
//   $nual12 = explode('</td>', $man12)[0];
//   $man13 = explode('<td>', $wd)[14];
//   $nual13 = explode('</td>', $man13)[0];
//   $man16 = explode('<td>', $wd)[15];
//   $nual16 = explode('</td>', $man16)[0];

//   // BALANCE BCH
//   $man17 = explode('<td>', $wd)[16];
//   $nual17 = explode('</td>', $man17)[0];
//   $man18 = explode('<td>', $wd)[17];
//   $nual18 = explode('</td>', $man18)[0];
//   $man19 = explode('<td>', $wd)[18];
//   $nual19 = explode('</td>', $man19)[0];

//   // BALANCE DASH
//   $man20 = explode('<td>', $wd)[19];
//   $nual20 = explode('</td>', $man20)[0];
//   $man21 = explode('<td>', $wd)[20];
//   $nual21 = explode('</td>', $man21)[0];
//   $man22 = explode('<td>', $wd)[21];
//   $nual22 = explode('</td>', $man22)[0];

//   // BALANCE FEY
//   $man23 = explode('<td>', $wd)[22];
//   $nual23 = explode('</td>', $man23)[0];
//   $man24 = explode('<td>', $wd)[23];
//   $nual24 = explode('</td>', $man24)[0];
//   $man25 = explode('<td>', $wd)[24];
//   $nual25 = explode('</td>', $man25)[0];

//   // BALANCE ZEC
//   $man26 = explode('<td>', $wd)[25];
//   $nual26 = explode('</td>', $man26)[0];
//   $man27 = explode('<td>', $wd)[26];
//   $nual27 = explode('</td>', $man27)[0];
//   $man28 = explode('<td>', $wd)[27];
//   $nual28 = explode('</td>', $man28)[0];

//   // BALANCE SOL
//   $man29 = explode('<td>', $wd)[28];
//   $nual29 = explode('</td>', $man29)[0];
//   $man30 = explode('<td>', $wd)[29];
//   $nual30 = explode('</td>', $man30)[0];
//   $man31 = explode('<td>', $wd)[30];
//   $nual31 = explode('</td>', $man31)[0];

//   // ECHO NAMPILKAN DI LAYAR TERMUX
//   echo $purple2 . "UPDATE BALANCE\n";
//   echo $lblue2 . "$nual" . $putih2 . "$lblue  $nual1";
//   echo $green2 . "     $nual17" . $putih2 . "$green2  $nual18";
//   echo "\n";
//   echo $yellow2 . "$nual3" . $putih2 . "$yellow2 $nual4";
//   echo $lblue2 . "     $nual20" . $putih2 . "$purple2 $nual21";
//   echo "\n";
//   echo $lblue2 . "$nual6" . $putih2 . "$lblue2  $nual7";
//   echo $purple2 . "     $nual23" . $putih2 . "$yellow2  $nual24";
//   echo "\n";
//   echo $r1 . "$nual9" . $putih2 . "$r1  $nual10";
//   echo $yellow2 . "     $nual26" . $putih2 . "$red2  $nual27";
//   echo "\n";
//   echo $y1 . "$nual12" . $putih2 . "$green2 $nual13";
//   echo $purple2 . "     $nual29" . $putih2 . "$yellow2  $nual30";
//   echo "\n";
//   an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   timer(60);
//   //echo$hijau2."Update Time : ".$green2.$tmr."\n";
//   //AUTO WD

//   if ($tmr <= null) {

//     echo $merah2 . "⚡ Complete shortlinks to start your Auto Claim! \n";

//     sleep(1);

//     exit;
//   } else {
//   }
//   //zec
//   if ($nual27 > "0.00250000") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "zec=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$kuning2} SUCCES SEND ZEC TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //fey
//   if ($nual24 > "0.00200694") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "fey=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$purple2} SUCCES SEND FEY TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //dash
//   if ($nual21 > "0.00000100") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "dash=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$lblue2} SUCCES SEND DASH TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //bch
//   if ($nual18 > "0.00001000") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "bch=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$green2} SUCCES SEND BCH TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //dgb
//   if ($nual7 > "0.00030000") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "dgb=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$lblue2} SUCCES SEND DGB TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //ltc
//   if ($nual1 > "0.00000010") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "ltc=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$lblue2} SUCCES SEND LTC TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //doge
//   if ($nual4 > "0.00040673") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "doge=withdraw";
//     $thpost2 = Post($link, $ua, $data);
//     echo "{$yellow2} SUCCES SEND DOGE TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //usdt
//   if ($nual13 > "0.00002100") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "usdt=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$y3} SUCCES SEND USDT TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   //trx
//   if ($nual10 > "0.00050000") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "trx=withdraw";
//     $thpost2 = Post($link, $ua, $data);
//     echo "{$red2} SUCCES SEND TRX TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
//   if ($nual30 > "0.00000100") {
//     $link = "https://lemeclaim.xyz/account.php";
//     $ua = [
//       "user-agent: " . $UserAgent,
//       "cookie: " . $Cookie
//     ];
//     $data = "sol=withdraw";
//     $thpost1 = Post($link, $ua, $data);
//     echo "{$ry} SUCCES SEND SOLANA TO FAUCETPAY\n";
//     an($lblue2 . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . $and . "\n");
//   } else {
//   }
// }