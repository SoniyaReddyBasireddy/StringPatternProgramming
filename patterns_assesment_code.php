<?php
/***php code to get all possible patterns by using input ***/
/***Given the string as input and return all possible patterns . Considered 4 arrays as an array and returned all possible patterns ***/
function getPatterns ($input_string, $prefix = ""){
	$array = array("1"=>["A","B","C"],"2"=>["D","E"],"12"=>["X"],"3"=>["Q","P"]);
    if ($input_string == '') {
	    if (strlen($prefix) > 0) {
	    	echo $prefix.','; 
	    }
	}
	for($i=1; $i <= strlen($input_string); $i++){
		$sub_string = substr($input_string, 0 , $i);
		if(isset($array[$sub_string])){
			foreach($array[$sub_string] as $pattern){
				getPatterns(substr($input_string, $i) , $prefix.$pattern);
			}
		}
	}
}
$input_str=getPatterns('123');
?>