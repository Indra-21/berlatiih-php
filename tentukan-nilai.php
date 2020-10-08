<?php

function tentukan_nilai($number)
{


if ($number >= 85 && $number <=100 ) {
    $hasil = "Sangat Baik";
} elseif($number >= 75 && $number <84 ){
    $hasil = "Baik";
} elseif($number >60 ){
    $hasil = "Cukup";
} else{
	$hasil = "Kurang";
}

  return $hasil	;
    
}

//TEST CASES
echo tentukan_nilai(98);//Sangat Baik
echo "<br>"; 
echo tentukan_nilai(76); //Baik
echo "<br>";
echo tentukan_nilai(67); //Cukup
echo "<br>";
echo tentukan_nilai(43); //Kurang
?>