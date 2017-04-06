<?php
require_once "currate.php";

for ($i = 0; $i < count($data); $i++) {
	$list = $data[$i];
	for ($j = 0; $j < $list->length; $j++) {
		$el = $list->item($j);
		/* Выводим курсы валют */
		if ($el->nodeName == "txt") echo '<option value="' .$el->nodeValue.'">' .$el->nodeValue.'</option>\n';

	}
	
}
?>