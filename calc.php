<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Калькулятор валют</title>
<link href="/demo/css/simple.css" rel="stylesheet" type="text/css" />
<link href="calc.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="calc.js"></script>
</head>

<body>

<div id="content">
    <h1>Калькулятор валют для сайта - Демо</h1>
        <div class="calc_body">
        <span>Калькулятор стоимости</span>
        <form name="calc_form" action="" id="calc_formid">
            <label for="calc_amount">Cумма в валюті:</label>
            <input name="calc_amount" value="1" size="4" />
            <div class="calc_clear"></div>
            <label for="calc_rates">Валюта:</label>
            <select name="calc_rates" id="ratesoption">

            </select>
            <div class="calc_clear"></div>
            <input type="submit" value="Розрахунок в грн." name="calc_do" class="calc_button" />
        </form>
        <label>Результат: </label><input name="result" id="calc_result" value="" disabled="disabled" size="4" />
        <div class="calc_clear"></div>
        <div id="calc_error"></div>
        </div>

</div>
</body>
</html>