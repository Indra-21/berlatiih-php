<?php
    function ubah_huruf($string){
    $huruf = "abcdefghijklmnopqrstuvwxyz";
    $hasil = "";
	   for($i=0; $i <strlen($string) ; $i++){
          $posisi = strpos($huruf, $string[$i]);
          $migrasi = substr($huruf, $posisi+1, 1);          
          $hasil .= $migrasi;
                
       } 	          
	   return $string." hasil berubah jadi :".$hasil;
    }
// // TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>