<?php

    //yorum satırına dönüştürmek için.
    #yorum satırına dönüştürmek için.
	/*yorum satırına dönüştürmek için.*/
	
	/*$universite = "Dumlupınar";
	$myo = "Universitesi";

    echo $universite;
	print "<br>";
	echo $myo;

	$universite = "Dumlupınar";
	define("OKUL_ADI", "KTBMYO");
	echo OKUL_ADI;
    mb : multi bayt.
	türkçe karakterler yok
	echo strlen("Karakter uzunluğu nedir?");
	echo str_word_count("Kelime sayiyor.");
	echo strrev("metni ters cevirir");
	echo strpos("Metnin kacinci karakterde oldugunu bulur.", "kacinci");
	echo str_replace("world", "Dolly", "Hello world!");*/ //1.aranan kelime , 2.değiştirilecek kelime, 3.çıkış.
	
	/*echo min(5, 6, 17, -3, 23, 2);
	echo max(5, 6, 17, -3, 23, 2);
    echo round(7.38);
	echo abs(-22);
	echo rand(1,10);
	$a = 5;
	$b = "5";
	 echo $a;
	$c = $a + $b;
	$c = $a / $b;
	// === tür kontrolü de yapmaktadır.
	
	if($a === $b) {
		echo "Aynı değere sahiptir";
	}
	else {
		echo "Farklı değere sahiptir";
	}
	
    $a = 5;
	$b = 6;
	
	$sonuc = ($a <=> $b);
	
	if($sonuc == 0) {
		echo "değerler eşit";
	} 
	else if ($sonuc == 1) {
		echo "A > B";
	}
	else if ($sonuc == -1) {
		echo "B > A";
	}*/
	
	/*$a = 6;
	$b = 1;
	$sonuc = ($a <=> $b);
	switch($sonuc)
	{
		case 0:
			echo "değerler eşit";
		break;
		case 1:
			echo "A > B";
		break;
		case -1:
			echo "B > A";
		break;
        default:
            echo "Geçersiz";
        break;		
	}*/
	
	//$aylar = array("ocak", "şubat", "mart");
	/*$aylar = ["ocak", "şubat", "mart"];
	print_r($aylar);
	var_dump($aylar);
	echo count($aylar);
	echo $aylar[1];*/
	
	/*$ogrenciler = [
	"202151502028" => "Kadir",
	"202151502029" => "Test",
	"202151502030" => "Test1",
	"202151502031" => "Test2"
	];	*/
	
	$cities = [
	 "Kütahya",
	 "Adana",
	 "Afyon",
	 "Balikesir"
	];

	echo "<h4>For Döngüsü ile<h4>";
	//echo $sehirListesi[count($sehirListesi)-1];
	for($i=1; $i<=count($cities); $i++) {
		echo $cities[$i-1];
		echo "<br>";
	}
	
	echo "<h4>While Döngüsü ile<h4>";
    $i = 0;
	while($i<count($cities)) 
	{
		echo $cities[$i++];
		echo "<br>";
	}

	echo "<h4>Do-While Döngüsü ile<h4>";
    $i = 0;
	do {
		echo $cities[$i++];
		echo "<br>";
	} while ($i<count($cities));

	echo "<h4>Foreach Döngüsü ile<h4>";
	foreach($cities as $key => $city) {
		echo $key;
		echo " - ";
		echo $city;
		echo "<br>";
	}

	function topla($a, $b) {
		return $a + $b;
	}
	echo topla(3,6);

	function faktoriyel1($sayi) {
		$sonuc = 1;
		for($i=1;$i<=$sayi;$i++) {
            $sonuc =  $sonuc * $i;
		}
		return $sonuc;
	}
	echo faktoriyel1(3);
    
	//Recursive
	function faktoriyel2($sayi) {
        if($sayi == 1) {
	        return 1;
        } 
		else {
	        return $sayi * faktoriyel2($sayi -1);
        }
	} 
    echo faktoriyel2(3);

?>