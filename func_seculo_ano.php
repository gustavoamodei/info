
<?php
 
 function ano_seculo($ano){
	
	if (!is_int($ano)) {
 	echo "informar um ano por favor!";
	}

	if($ano >=1 && $ano <= 100){
		echo " século 1";
	}
	if($ano > 100 && $ano <=200){
		echo " século 2";
	}
	if($ano > 200 && $ano <=300){
		echo " século 3";
	}if($ano > 300 && $ano <=400){
		echo " século 4";
	}if($ano > 400 && $ano <=500){
		echo " século 5";
	}if($ano > 500 && $ano <=600){
		echo " século 6";
	}
	if($ano > 600 && $ano <=700){
		echo " século 7";
	}

	if($ano > 700 && $ano <=800){
		echo " século 8";
	}

	if($ano > 800 && $ano <=900){
		echo " século 9";
	}

	if($ano > 900 && $ano <=1000){
		echo " século 10";
	}if($ano > 1000 && $ano <=1100){
		echo " século 11";
	}
	if($ano > 1100 && $ano <=1200){
		echo " século 12";
	}
	////......etc
}
 




function palindromo($palavra){

if ($palavra == strrev ( $palavra )) 
	echo " A string é um palíndromo . ";
else
	echo' A string não é um palíndromo . ';

}

ano_seculo("ana");
palindromo("clara");

 function numero_da_area($num){

 	$n1=1;
 	$n2=5;
 	$n3=13;
 	$n4=25;

 	if($num == 1){
 		echo "n1 = 1";
 	}
 	if($num == 5){
 		echo "n2 = 5";
 	}
 	if($num == 13){
 		echo "n3 = 15";
 	}
 	if($num == 25){
 		echo "n4 = 25";
 	} 
 }

 numero_da_area(13);