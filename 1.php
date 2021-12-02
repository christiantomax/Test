<?php
	if (isset($_POST['inputUser']) && isset($_POST['jenis'])) {
		if ($_POST['jenis'] == "BinaryToDecimal") {
			$binary = $_POST['inputUser'];
			$counter = 0;
			$result = 0;
			$arr = str_split($binary);
			foreach ($arr as $char) {
				if ($char == "1") {
					$result += pow(2,$counter);
				}
				$counter++;
			}
			echo $result;
		}
		else if($_POST['jenis'] == "DecimalToBinary"){
			$decimal = $_POST['inputUser'];
			$result = "";
			while($decimal>=2) {
			  $result = $result.($decimal%2);
			  $decimal = floor($decimal/2);
			}
			if($result.($decimal/2) > 0){
				$result = $result."1";
			}else{
				$result = $result."0";
			}

			echo strrev($result);
		}else{
			echo "Jenis convert tidak ditemukan";
		}
	}else{
		echo "Maaf anda harus mengirimkan post inputUser dan post jenis";
	}
?>
