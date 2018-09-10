<?php
	function rekursif($rekf){
		global $i;

		rekursif2($i,$rekf);
		echo "<br>";
		if(--$rekf>$i){
			rekursif($rekf);

	}
		}
		function rekursif2($k,$rekf){
			global $i;

		if($k>$i -$rekf){
	echo "*";
	rekursif2($k-1,$rekf);
	}
}

$inputkanja = $_GET["inputkan"];
$i = 0;
rekursif($inputkanja);

for ($i=1;$i<=$inputkanja; $++){
	if($i % 2 == 0){
		$genap[]=$i;
	}else{
$ganjil[]=$i;
}
}

echo "genap = ";
foreach ($ganjil as $bil_genap) {
	echo $bil_genap . ',';
	# code...
}
echo "<br>";
echo "ganjil = ";
foreach ($ganjil as $bil_ganjil) {
	echo $bil_ganjil . ',';
	# code...
}

echo "<br><br>Jumlah deret Genap = ".count($genap) . "<br>";
echo "Jumlah deret ganjil = " . count($ganjil);
?>
