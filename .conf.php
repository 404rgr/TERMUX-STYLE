<?php
/*Ga Usah Decode Decode gan*/
/* Ga guna :b*/
/*Fuck you to you recode*/


/* Coded By Zeerx7*/
/*  Rao Cyber Team */
/* 2019©Indonesian Hacker Rulez*/


//###################///
//Color / warna
$R  = "\e[91m";  //red
$RR = "\e[91;7m";
$G  = "\e[92m";  //green
$GG = "\e[92;7m";
$B  = "\e[36m";  //blue
$BB = "\e[36;7m";
$Y  = "\e[93m"; //yellow
$YY = "\e[93;7m";
$W  = "\e[0m";  //White
/////////////////////////
$in="Ini hanyalah file kosong\nTapi jangan menghapus file ini\nsupaya tools berjalaan lancar";
if ($start == "go") {

}else{
	echo $in;
	exit();
}
	/*      Config.       */
$includefileasli=".style.php";
$dir  = "/data/data/com.termux/files/usr/etc";
$bash = "bash.bashrc"; //bash.bashrc
$motd = "motd"; //motd
$fmotd= fopen($dir . '/' . $motd,"w");
$file = fopen($dir . '/' . $bash,"w");
$data = "0";
$nama = $B."\n>> Nickname <<( ".$G;
$ntim = $B.">> Nama Team <<( ".$G;
$berhasil = "\e[92mBerhasil\n";
$iya  = $B."\nMasukan Nick/simbol apapun\nuntuk mengganti simbol ".$R."$".$B." di termux !\n".$Y."#>> ".$G;
$pop  = $Y."\nApakah Ingin Mengubah Simbol '".$R."$".$Y."'\ndi Termux Anda?\n".$W."[".$B."Y".$W."/".$B."n".$W."]>  ".$G;
$mulai= " { Memulai Kembali Tools }\n";
$nfile= "start.php"; //nama file ini !!!
$about = $B."Tools Ini berfungsi untuk mengubah\ntampilan awal termux, Supaya Lebih keren\ndikit lah gan...\n\nTools ini sebenarnya Sudah lama saya buat\ndan pertama saya membuat dengan bahasa bash shell,\ndan karena ada beberapa masalah saya tidak lanjutkan,\ndan saya memulai kembali menulis ulang tools ini\ndengan bahasa php yang saya bisa, dan ternyata\nberhasil dengan mulus...\n\n { Coded By Zeerx7 }\n { Rao Cyber Team  }\n";
$ab = "Apakah ingin memulai kembali\nTools Ini?";
$restar="php start.php";
$errorinput="Input Error\n\n";
$intools="Welcome To My Tools";
$pemisah = <<<'pemisah9'
\n
pemisah9;
$yakin1=$R."\napakah anda benar ingin mengebalikan\nTampilan Termux Seperti Semula".$G."?\n\n".$Y." (Y/n) >".$G." ";
$buat1="Pada Menu Ini kamu harus mempunyai\nkeahilan di pemrogran bash\nuntuk mencegah terjadinya error pada termux anda\n\n";
$buat2="Apakah Kamu Yakin? Ingin Mempercantik Termux anda Sendiri?\n";
$buat3="\nex : figlet rao cyber team \n[ Cari di google jika tidak tau ]\n";
$buat4="gunakan ".$pemisah." sebagai pemisah line\ninput>>> ";


$welcomeMOTD="
 [ Welcome To Termux ]
       $nick ";

/*    Zone Panjang   */

$awal = <<<'AWAL'
if [ -x /data/data/com.termux/files/usr/libexec/termux/command-not-found ]; then
        command_not_found_handle() {
                /data/data/com.termux/files/usr/libexec/termux/command-not-found "$1"
        }
fi

AWAL;

$create1 = <<<'AWALZ'
if [ -x /data/data/com.termux/files/usr/libexec/termux/command-not-found ]; then
        command_not_found_handle() {
                /data/data/com.termux/files/usr/libexec/termux/command-not-found "$1"
        }
fi

AWALZ;


$MOTDasli = <<<"motd100"

Welcome to Termux!

Wiki:            https://wiki.termux.com
Community forum: https://termux.com/community
Gitter chat:     https://gitter.im/termux/term>
IRC channel:     #termux on freenode

Working with packages:

 * Search packages:   pkg search <query>
 * Install a package: pkg install <package>
 * Upgrade packages:  pkg upgrade

Subscribing to additional repositories:

 * Root:     pkg install root-repo
 * Unstable: pkg install unstable-repo
 * X11:      pkg install x11-repo

Report issues at https://termux.com/issues

motd100;

$bashrcASLI = <<<'bashrcasli'
if [ -x /data/data/com.termux/files/usr/libexec/termux/command-not-found ]; then
        command_not_found_handle() {
                /data/data/com.termux/files/usr/libexec/termux/command-not-found "$1"
        }
fi

PS1='\$ '
bashrcasli;



$pilihan = $G."
    {".$B." Menu".$G." }
".$Y." [".$R."1".$Y."]".$G." Tema Satu
".$Y." [".$R."2".$Y."]".$G." Tema Dua
".$Y." [".$R."3".$Y."]".$G." Tema Tiga
".$Y." [".$R."4".$Y."]".$G." Tema Empat
".$Y." [".$R."5".$Y."]".$G." Tema Lima
".$Y." [".$R."6".$Y."]".$G." Tema Enam
".$Y." [".$R."7".$Y."]".$G." Tema Tujuh
".$R." [A]".$G." Dengan Code Sendiri
".$B." [B]".$G." Kembali Ke Default
".$G." [0]".$G." About".$X."

</Pilih> ";

//############::::::#:################

$url='http://localhost:4444';
if(!$sock = @fsockopen("https://google.com", 80))
{
    echo 'Not Connected';
}
else
{
echo 'Connected';
$ambil = file_get_contents($url);
echo $ambil;
}



//$$$$$@@@@@@@@@@@@$$$$$$@@@@@@@:::###


$banner2="".$B."
  ".$R."@@@@@@@@@    ".$B."          ".$R."@@@@@@@@@
 @@@@@".$Y.":::::".$R."@            @@@@@".$Y.":::::".$R."@
     ".$R."@".$Y."::::".$R."@                 @".$Y."::::".$R."@
   ".$R." @".$Y."::::".$R."@ ".$B."Coded By Zeerx7".$R." @".$Y."::::".$R."@
   ".$R."@".$Y."::::".$R."@  ".$B."RAO CYBER TEAM ".$R."@".$Y."::::".$R."@
 ".$R." @".$Y."::::::".$R."@@@             @".$Y."::::::".$R."@@@
".$R." @".$Y."::::::::::".$R."@           @".$Y."::::::::::".$R."@
 ".$R." @".$Y."::::::::".$R."@             @".$Y."::::::::".$R."@
  ".$R." @@@@@@@@               @@@@@@@@
";

$banner1 = $Y."
  @@@@@@@@@
 @@@@@".$R.":::::".$Y."@   ".$B."€€€€€€€€€€€€€€€€€€€€€€€".$Y."
     @".$R."::::".$Y."@    ".$B."¥ ".$R."Welcome To My Tools ".$B."¥".$Y."
    @".$R."::::".$Y."@     ".$B."€€€€€€€€€€€€€€€€€€€€€€".$B."€".$Y."
   @".$R."::::".$Y."@      ".$B."¥ ".$G."  Coded By Zeerx7   ".$B."¥".$Y."
  @".$R."::::::".$Y."@@@   ".$B."¥ ".$G."  Rao Cyber Team    ".$B."¥".$Y."
 @".$R."::::::::::".$Y."@  ".$B."€€€€€€€€€€€€€€€€€€€€€€".$B."€".$Y."
  @".$R."::::::::".$Y."@   Youtube : Pausi Channel
   @@@@@@@@
";
$banner3 =$R."
          $   $$
      $  $ $ $   $  $
  $  $ $    $ $ $    $ $
 $ $          $ $        $
$     ".$Y."Coded by Zeerx7 ".$R."   $
 $    ".$Y."RAO CYBER TEAM  ".$R."  $
 $    ".$G."Yt:Pausi Channel".$R."  $
  $$  $$  $$  $$  $$  $$
    $$  $$  $$  $$  $$
";

$bann=array($banner1,$banner2,$banner3,$banner1,$banner2,$banner3);
$bann1=array_rand($bann,2);
$banner=$bann[$bann1[1]];

/*

   @ @ @ @ @ @ @ @ @ @ @ @ @
  @   Welcome To my Tools   @
 @      Coded By Zeerx7    @
  @ @ @ @ @ @ @ @ @ @ @ @ @

   $ $ $ $ $ $ $ $ $ $ $ $
  $  Welcome To my Tools  $
 $     Coded by Zeerx7   $
  $ $ $ $ $ $ $ $ $ $ $ $

   -,-,-,-,-,-,-,-,-,-,-,-,-
  –,  Welcome To my Tools  ,-
 –,     Cosed by Zeerx7   ,-
  –,-,-,-,-,-,-,-,-,-,-,-,-

*/
//echo $banner;

// Start
include $includefileasli;
?>
