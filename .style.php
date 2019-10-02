<?php
/*please dont recode*/
/*Coded By Zeerx7*/
/*Rao cyber team*/
//2019©indonesian hacker rulez

$welcomeMOTD="
 [ Welcome To Termux ]
       $nick ";



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


function loading(){
echo "     LOADING...\n";
$load1 = "40"; //system("tput cols");
echo " [ ";
 for( $i= 0 ; $i < $load1 ; $i++ )
{ echo "█"; usleep(9000); }
echo " ]";
}


loading();
system("clear");
echo $banner;
//echo "\e[0;36m [ Welcome To my Tools ] \n";
echo $pilihan;
$menu = trim(fgets(STDIN));
system("clear");
echo $banner;
if($menu == '1'){
  echo $nama;
  $nick = trim(fgets(STDIN));
  echo $ntim;
  $tim = trim(fgets(STDIN));
  $data = $awal."clear\ncowsay -f eyes ".$tim." | lolcat \ntoilet -f standard ".$nick." -F gay \ndate | lolcat\n";
  fwrite($file, $data);
  fclose($file);

}elseif($menu == '2'){
  echo $nama;
  $nick = trim(fgets(STDIN));
  echo $ntim;
  $tim = trim(fgets(STDIN));
  $data = $awal."clear\ncowsay -f ghostbusters ".$tim." | lolcat \ntoilet -f standard ".$nick." -F gay \ndate | lolcat\n";
  fwrite($file, $data);
  fclose($file);
}elseif($menu == '3'){
  echo $nama;
  $nick = trim(fgets(STDIN));
  echo $ntim;
  $tim = trim(fgets(STDIN));
  $data = $awal."clear\ncowsay -f dragon ".$tim." | lolcat\ntoilet -f  standard ".$nick." -F gay\ndate | lolcat\n";
  fwrite($file, $data);
  fclose($file);
  echo $berhasil;
}elseif($menu == '4'){
  echo $nama;
  $nick = trim(fgets(STDIN));
  echo $ntim;
  $tim = trim(fgets(STDIN));
  $data = $awal."clear\nprintf '\n　╱▔▔▔▔▔▔▔╲\n　▏╭╮   ╭╮▕\n　▏┃┃   ┃┃▕\n　▏╰╯   ╰╯▕   ".$nick."\n　▏   ╭╮   ▏  Team : ".$tim."\n　▏   ┃┃   ▏\n　▏   ╰╯   ▏\n　▏        ▏\n　╲╱╲╱╲╱╲╱".$pemisah."' | lolcat\n\ndate | lolcat\n\n";
  fwrite($file, $data);
  fclose($file);
  echo $berhasil;

}elseif($menu == '5'){
  echo $nama;
  $nick = trim(fgets(STDIN));
  echo $ntim;
  $tim = trim(fgets(STDIN));
  $data = $awal."clear\ncowsay -f tux ".$tim." | lolcat\ntoilet -f standard ".$nick." -F gay\ndate | lolcat\n";
  fwrite($file, $data);
  fclose($file);
  echo $berhasil;

}elseif($menu == '6'){
  echo $nama;
  $nick = trim(fgets(STDIN));
  echo $ntim;
  $tim = trim(fgets(STDIN));
  $data = $awal."clear\nprintf '\n╮╰╮╮▕╲╰╮╭╯╱▏╭╭╭╭\n╰╰╮╰╭╱▔▔▔▔╲╮╯╭╯\n┏━┓┏┫╭▅╲╱▅╮┣┓╭║║║\n╰┳╯╰┫┗━╭╮━┛┣╯╯╚╬╝\n╭┻╮╱╰╮╰━━╯╭╯╲┊ ║  ".$nick."\n╰┳┫▔╲╰┳━━┳╯╱▔┊ ║ Team : ".$tim."\n┈┃╰━━╲▕╲╱▏╱━━━┬╨╮\n┈╰━━╮┊▕╱╲▏┊╭━━┴╥╯".$pemisah."' | lolcat\ndate | lolcat\n\n";
  fwrite($file, $data);
  fclose($file);
  echo $berhasil;

}elseif($menu == '7'){
  echo $nama;
  $nick = trim(fgets(STDIN));
  echo $ntim;
  $tim = trim(fgets(STDIN));
  $data = $awal."clear\ncowsay -f daemon ".$tim." | lolcat\ntoilet -f standard ".$nick." -F gay\ndate | lolcat\n";
  fwrite($file, $data);
  fclose($file);
  echo $berhasil;
}elseif($menu == 'A' or $menu == "a"){
  echo $buat1;
  sleep('2.5');
  echo $buat2;
  echo "[Y/n]> ";
  $input7 = trim(fgets(STDIN));
  if($input7 == "y" or $input7 == "Y"){
    echo $buat3;
    echo $buat4;
    $inputbuat = trim(fgets(STDIN));
    $data = $inputbuat;
    fwrite($file, $data);
    fclose($file);
    sleep('1');
    echo $berhasil;
  }else{
    sleep("0.5");
    echo "\n\nInput Gagal...\nMengeluarkan Dari program...\n\n";
    sleep("3");
    exit();
  }
}elseif($menu == "B" or $menu == "b"){
  //kembali();
  echo $yakin1;
  $yakin3 = trim(fgets(STDIN));
  if($yakin3 == "y" or $yakin3 == "Y"){
    //$data = $bashrcASLI;
    sleep('1');
    $file9 = fopen($dir . '/' . $bash,"w");
    fwrite($file9, $bashrcASLI);
    fclose($file9);
    fwrite($fmotd, $MOTDasli);
    fclose($fmotd);
    echo $berhasil;
    exit();
  }else{
    echo "Exit....\n";
    sleep('2');
    exit();
  }
}elseif($menu == "0" or $menu == "o"){
  echo $about;
  sleep("1");
  sleep('1');
  $file9 = fopen($dir . '/' . $bash,"w");
  fwrite($file9, $bashrcASLI);
  fclose($file9);
  fwrite($fmotd, $MOTDasli);
  fclose($fmotd);
  //echo $berhasil;
  exit();
  /*
  echo $ab;
  $o = trim(fgets(STDIN));
  if($o == "Y"){
    sleep('1');
    include $nfile;
    //system($restar);
  }else{
    exit();
  }*/
}else{
  echo $errorinput;
  sleep("1");
  $file9 = fopen($dir . '/' . $bash,"w");
  fwrite($file9, $bashrcASLI);
  fclose($file9);
  fwrite($fmotd, $MOTDasli);
  fclose($fmotd);
  /*echo $mulai;
  sleep("3");
  system("clear");*/
  //include $nfile;
  //system($restar);
  exit(1);
}
sleep('1');
echo $pop;
$ubah = trim(fgets(STDIN));
if($ubah == "Y" or $ubah == "y"){
  echo $iya;
  $anjay1 = trim(fgets(STDIN));
  $anjay = "PS1='$anjay1'";
  $santuy = fopen($dir . '/' . $bash,"a");
  fwrite($santuy, $anjay);
  fclose($santuy);
  echo $berhasil;
}else{
  $anjay = "PS1='\$ '";
  $santuy = fopen($dir . '/' . $bash,"a");
  fwrite($santuy, $anjay);
  fclose($santuy);
  echo $berhasil;
}

//mengubah motd
fwrite($fmotd, $welcomeMOTD);
fclose($fmotd);

?>
