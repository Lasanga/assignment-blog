<?php
function allErrors($errors=array()){
	$output ="";
	if (!empty($errors)) {
		foreach ($errors as $key => $error) {
		$output .="<p>".$error."</p>";
		}
	}
	return $output;
}
?>