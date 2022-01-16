<?php
function formateAvailable(array $book): string {
	if (!$book['available']) {
		$result = ' <b> Not available </b>';
	}
	else{
		$result = ' <b> Available </b>';
	}
	return $result;
}
?>