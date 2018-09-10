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
?>
