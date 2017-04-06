<?php
require_once "currate.php";
header('Content-Type: application/x-javascript; charset=utf8');

$amount = str_replace(",", ".", $_POST["calc_amount"]);
if (!preg_match("|^[0-9/.]+$|", $amount)) {
	print_result(array('message' => 'Сумма не Є числом', 'type' => 'err'));
}

if(isset($_POST['calc_rates'])) {
	$varCurr = $_POST['calc_rates'];
	$errorMessage = "";

	switch ($varCurr) {
		case "Долар США":
			$value = $usdval;
			break;
		case "Євро":
			$value = $eurval;
			break;
		case "Злотий":
			$value = $zlotval;
			break;
		case "Російський рубль":
			$value = $rubval;
			break;

		default:
			echo("Error!");
			exit();
			break;
	}
	

	$result = $value * number_format((float)$amount, 2, ',', '');

	print_result(array('message' => $result, 'type' => 'msg'));
}
function print_result($array){
	echo json_encode($array, JSON_UNESCAPED_UNICODE);
	die;
}
?>