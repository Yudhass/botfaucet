<?php 
//error_reporting(0);
system("clear");
//system("pkg install toilet -y");
$yt="";
//color
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$end = "\033[0m";


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
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$Color_Off="\033[0m";      
$Black="\033[0;30m";      
$Red= "\033[0;31m";         
$Green="\033[0;32m";      
$Yellow="\033[0;33m";       
$Blue="\033[0;34m";         
$Purple="\033[0;35m";      
$Cyan="\033[0;36m";       
$White="\033[0;37m";       
$IYellow="\033[0;93m";      
$IRed="\033[0;91m";         
$BIRed="\033[1;91m";   
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";     
$BIBlue="\033[1;94m";      
$BICyan="\033[1;96m";       
$BIBlack="\033[1;90m";     
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";  
$On_White="\033[47m";     
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";   
$On_Blue="\033[44m";
$On_Green="\033[42m";  
$IGreen="\033[0;92m";   
$IYellow="\033[0;93m";
$Icyan="\033[0;96m";
//red to yellow shade ↓

$r3 = "\033[01;38;5;196m";
$r2 = "\033[01;38;5;202m";
$r1 = "\033[01;38;5;208m";
$ry = "\033[01;38;5;214m";
$y1 = "\033[01;38;5;220m";
$y2 = "\033[01;38;5;226m";
$y3 = "\033[01;38;5;228m";

$termux = $r3 . "♥";
$hh = $green2 . "💚";
$kh = $y2 . "💛";
$bh = $lblue2 . "💙";
$uh = $purple2 . "💜";
/* END COLOR */

function Save($namadata)
{
    if (file_exists($namadata)) {
        $data = file_get_contents($namadata);
    } else {
        // bn();
        an($lblue2."Your Email Faucetpay"."\n");
        fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        $data = readline(p . " Input " . $namadata . " : " . h);
        file_put_contents($namadata, $data);
    }
    return $data;
}

function fast($str)
{
    $rar = str_split($str);
    foreach ($rar as $zz) {
        echo $zz;
        usleep(3000);
    }
}

function an($str)
{
    $arr = str_split($str);
    foreach ($arr as $az) {
        echo $az;
        usleep(19999);
    }
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

function sisaWaktu($durasi) {
    $jam = floor($durasi / 3600);
    $menit = floor(($durasi % 3600) / 60);
    $detik = $durasi % 60;
    
    if ($jam > 0) {
        return "$jam jam $menit menit $detik detik";
    } elseif ($menit > 0) {
        return "$menit menit $detik detik";
    } else {
        return "$detik detik";
    }
}

function get($url)
{
    return curl($url, null, head())[1];
}
function post($url, $data)
{
    return curl($url, $data, head())[1];
}
function curl($url, $post = 0, $httpheader = 0, $proxy = 0)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_COOKIE, TRUE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "Cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR, "Cookie.txt");
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    if ($httpheader) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    if ($proxy) {
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
    }
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if (!$httpcode) return "Curl Error : " . curl_error($ch);
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        curl_close($ch);
        return array($header, $body);
    }
}

function head()
{
    $ua[] = "Host: " . host;
    $ua[] = "x-requested-with: XMLHttpRequest";
    $ua[] = "referer:https://lemeclaim.xyz";
    return $ua;
}

const
    /* WARNA */
    p = "\033[1;97m",
    m = "\033[1;31m",
    h = "\033[1;32m",
    n = "\n",
    t = "\t",
    r = "                  \r",
    host = "fowcy.xyz",
    login = "https://fowcy.xyz",
    logver = "https://fowcy.xyz/check.php",
    dashboard = "https://fowcy.xyz/home.php?DOGE=1&DGB=1&TRX=1&USDT=1&MATIC=1&DASH=1&FEY=1&ZEC=1&SOL=1&XRP=1&ADA=1&TON=1&redirect=1",
    verif = "https://fowcy.xyz/home.php?DOGE=1&DGB=1&TRX=1&USDT=1&MATIC=1&DASH=1&FEY=1&ZEC=1&SOL=1&XRP=1&ADA=1&TON=1&redirect=1",
    wd = "https://fowcy.xyz/account.php",
    wdver = "https://fowcy.xyz/account.php",
    url = "https://fowcy.xyz";

function bn()
{
    system('clear');
    $res = "\033[0m";
    $end = "\033[0m";
    $green2 = "\033[1;32m";
    $lblue2 = "\033[1;36m";
    $y2 = "\033[01;38;5;226m";
    $merah2 = "\e[1;31m";
    $putih2 = "\33[37;1m";
    echo "\033[1;97m\n──────────────────────────────────────────────────────────────────\n";
    echo fast($merah2 . "═╗ ╦╔╦╗       ╔═╗╔═╗╔╗╔╔╦╗╔═╗╔═╗╦ ╦" . $end);
    fast($merah2 . " [✓] CREATOR : REVOLT\n" . $end);
    echo fast($green2 . "╔╩╦╝ ║║  ───  ╠╣ ╠═╣║║║ ║ ╠═╣╚═╗╚╦╝" . $end);
    fast($y2 . " [✓] SCRIPT  : " . h . parse_url(url)['host'] . "\n" . $end);
    echo fast($lblue2 . "╩ ╚══╩╝       ╚  ╩ ╩╝╚╝ ╩ ╩ ╩╚═╝ ╩" . $end);
    fast($lblue2 . "  [✓] VERSION : 2.0\n" . $end);
    echo "\033[1;97m──────────────────────────────────────────────────────────────────\n";
}


log:
$email = Save("Email");
$lojin = get(login);
$data = "email=$email&r=&btn-start=";
$lojinver = post(logver, $data);
$suc = explode('")', explode('toastr["success"]("', $lojinver)[1])[0];
if ($suc = "") {
    goto gas;
};
gas:
// bn(host, 1);
menu:
$db = get(wd);
// echo $db;
$doge = explode('</td>', explode('<td>', $db)[1])[0];
$doge2 = explode('</td>', explode('<td>', $db)[2])[0];

$dgb = explode('</td>', explode('<td>', $db)[4])[0];
$dgb2 = explode('</td>', explode('<td>', $db)[5])[0];

$trx = explode('</td>', explode('<td>', $db)[7])[0];
$trx2 = explode('</td>', explode('<td>', $db)[8])[0];

$usdt = explode('</td>', explode('<td>', $db)[10])[0];
$usdt2 = explode('</td>', explode('<td>', $db)[11])[0];

$dash = explode('</td>', explode('<td>', $db)[13])[0];
$dash2 = explode('</td>', explode('<td>', $db)[14])[0];

$fey = explode('</td>', explode('<td>', $db)[16])[0];
$fey2 = explode('</td>', explode('<td>', $db)[17])[0];

$zec = explode('</td>', explode('<td>', $db)[19])[0];
$zec2 = explode('</td>', explode('<td>', $db)[20])[0];

// sol

//matic

$xrp = explode('</td>', explode('<td>', $db)[28])[0];
$xrp2 = explode('</td>', explode('<td>', $db)[29])[0];

$ada = explode('</td>', explode('<td>', $db)[31])[0];
$ada2 = explode('</td>', explode('<td>', $db)[32])[0];

$ton = explode('</td>', explode('<td>', $db)[34])[0];
$ton2 = explode('</td>', explode('<td>', $db)[35])[0];

an($lblue2." Welcome Back Bossque 😎"."\n");
an($lblue2." Your Balance"."\n");
an($lblue2." Host ". host ."\n");
fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
echo $lblue2." $doge".$putih2."$lblue2  $doge2";  echo $green2."     $dgb".$putih2."$green2   $dgb2";
echo"\n";
echo $yellow." $trx".$putih2."$yellow   $trx2";  echo $purple."     $usdt".$putih2."$purple  $usdt2";
echo"\n";
echo $lblue." $dash".$putih2."$lblue  $dash2";  echo $cyan."     $fey".$putih2."$cyan   $fey2";
echo"\n";
echo $Icyan." $zec".$putih2."$Icyan   $zec2";  echo $red2."     $xrp".$putih2."$red2   $xrp2";
echo"\n";
echo $purple2." $ada".$putih2."$purple2   $ada2";  echo $IGreen."     $ton".$putih2."$IGreen   $ton2";
echo"\n";

fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
an($y2 . "『1』Start Claim\n");
an($purple2 . "『2』Update Email\n");
fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
$pilih = 1;
// $pilih = readline($red2 . "CHOOSE YOUR NUMBER: ");
fast($red2 . " CHOOSE YOUR NUMBER: " . $pilih . $end . "\n");
fast($lblue2 . "────────────────────────────────────────" . $end . "\n");

if ($pilih == 1) {
    Midori:
    while (true) {
        $faucet = get(dashboard);
        $explodeResult = explode('clock.setTime(', $faucet);
        
        if (isset($explodeResult[1])) {
            $durasi = explode(");", $explodeResult[1])[0];
        } else {
            $durasi = 0; // Default jika tidak ditemukan
        }
        timer(60);

        if ($durasi == 0) {
            echo $red2 . "🚫 Attention !! Your Energy Is Running Out \n";
            echo $red2 . "⚡ complete the shortlink on the website" . $y2 . "\n";
            exit;
        } else {
        }
        $db = get(wd);
        
        $doge = explode('</td>', explode('<td>', $db)[1])[0];
        $doge2 = explode('</td>', explode('<td>', $db)[2])[0];

        $dgb = explode('</td>', explode('<td>', $db)[4])[0];
        $dgb2 = explode('</td>', explode('<td>', $db)[5])[0];

        $trx = explode('</td>', explode('<td>', $db)[7])[0];
        $trx2 = explode('</td>', explode('<td>', $db)[8])[0];

        $usdt = explode('</td>', explode('<td>', $db)[10])[0];
        $usdt2 = explode('</td>', explode('<td>', $db)[11])[0];

        $dash = explode('</td>', explode('<td>', $db)[13])[0];
        $dash2 = explode('</td>', explode('<td>', $db)[14])[0];

        $fey = explode('</td>', explode('<td>', $db)[16])[0];
        $fey2 = explode('</td>', explode('<td>', $db)[17])[0];

        $zec = explode('</td>', explode('<td>', $db)[19])[0];
        $zec2 = explode('</td>', explode('<td>', $db)[20])[0];

        $xrp = explode('</td>', explode('<td>', $db)[28])[0];
        $xrp2 = explode('</td>', explode('<td>', $db)[29])[0];

        $ada = explode('</td>', explode('<td>', $db)[31])[0];
        $ada2 = explode('</td>', explode('<td>', $db)[32])[0];

        $ton = explode('</td>', explode('<td>', $db)[34])[0];
        $ton2 = explode('</td>', explode('<td>', $db)[35])[0];

        echo $purple2 . " $hh" . $green . " UPDATE BALANCE \n";
        echo $purple2 . " $kh" . $green . " SISA WAKTU " . sisaWaktu($durasi) . "\n";
        echo $purple2 . " $bh" . $green . " HOST " . host . "\n";
        fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        echo $lblue2." $doge".$putih2."$lblue2  $doge2";  echo $green2."     $dgb".$putih2."$green2   $dgb2";
        echo"\n";
        echo $yellow." $trx".$putih2."$yellow   $trx2";  echo $purple."     $usdt".$putih2."$purple  $usdt2";
        echo"\n";
        echo $lblue." $dash".$putih2."$lblue  $dash2";  echo $cyan."     $fey".$putih2."$cyan   $fey2";
        echo"\n";
        echo $Icyan." $zec".$putih2."$Icyan   $zec2";  echo $red2."     $xrp".$putih2."$red2   $xrp2";
        echo"\n";
        echo $purple2." $ada".$putih2."$purple2   $ada2";  echo $IGreen."     $ton".$putih2."$IGreen   $ton2";
        echo"\n";

        fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        if ($doge2 > "1.00000000") {
            $link = get(wd);
            $data = "doge=withdraw";
            $wd = post(wd, $data);
            echo "{$y2} SUCCES SEND $doge2 $doge TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($dgb2 > "1.00000000") {
            $link = get(wd);
            $data = "dgb=withdraw";
            $wd = post(wd, $data);
            echo "{$lblue2} SUCCES SEND $dgb2 $dgb TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($trx2 > "1.00000000") {
            $link = get(wd);
            $data = "trx=withdraw";
            $wd = post(wd, $data);
            echo "{$red2} SUCCES SEND $trx2 $trx TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($usdt2 > "1.00000000") {
            $link = get(wd);
            $data = "usdt=withdraw";
            $wd = post(wd, $data);
            echo "{$green2} SUCCES SEND $usdt2 $usdt TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($dash2 == "1.00000000") {
            $link = get(wd);
            $data = "dash=withdraw";
            $wd = post(wd, $data);
            echo "{$y2} SUCCES SEND $dash2 $dash TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($fey2 > "1.00000000") {
            $link = get(wd);
            $data = "fey=withdraw";
            $wd = post(wd, $data);
            echo "{$purple2} SUCCES SEND $fey2 $fey TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($zec2 > "1.00000000") {
            $link = get(wd);
            $data = "zec=withdraw";
            $wd = post(wd, $data);
            echo "{$lblue2} SUCCES SEND $zec2 $zec TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($xrp2 > "1.00000000") {
            $link = get(wd);
            $data = "xrp=withdraw";
            $wd = post(wd, $data);
            echo "{$putih2} SUCCES SEND $xrp2 $xrp TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($ada2 > "1.00000000") {
            $link = get(wd);
            $data = "ada=withdraw";
            $wd = post(wd, $data);
            echo "{$putih2} SUCCES SEND $ada2 $ada TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        if ($ton2 > "1.00000000") {
            $link = get(wd);
            $data = "ton=withdraw";
            $wd = post(wd, $data);
            echo "{$putih2} SUCCES SEND $ton2 $ton TO FAUCETPAY\n";
            fast($lblue2 . "────────────────────────────────────────" . $end . "\n");
        } else {
        }
        goto Midori;
    }
}



if ($pilih == 2) {
    kukis:
    if (file_exists("Cookie.txt")) {
        system("rm Cookie.txt");
    }
    $Email = readline("{$putih} ~> INPUT Email: ");
    file_put_contents("Email", $Email);
}

goto log;


?>