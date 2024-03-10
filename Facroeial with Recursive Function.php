<?php 

function Factorail($n){

	if($n == 0){
		return 1;
	}
	else{
		return($n * Factorail($n -1 ));
	}
}
echo Factorail(6);



 ?>