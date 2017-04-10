<!DOCTYPE html>
<html lang="ua">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Калькулятор валют</title>
</head>

<body>

<div id="content">

    <div class="calc_body">
        <span>Калькулятор</span>
        <form name="calc_form" action="" id="calc_formid" class="col-sm-6">
            <div class="form-group col-sm-6">
                <span class="input-group-addon" id="calc_amount">Cумма в валюті:</span>
                <input type="number" name="calc_amount" class="form-control" aria-describedby="calc_amount">
            </div>

            <div class="form-group col-sm-6">
                <label for="ratesoption">Валюта:</label>
                <select name="calc_rates" id="ratesoption" class="form-control">
                </select>
            </div>
        <div class="calc_clear" style="clear: both;"></div>

                <button type="submit" name="calc_do" class="btn btn-lg btn-primary calc_button col-sm-6" style="margin-top: 2%">Розрахунок в грн.</button>
                <div class="form-group col-sm-6">
                    <label for="calc_result">Результат: </label>
                    <input type="number" name="result" id="calc_result" class="form-control" value="" readonly>
                </div>

        </form>

        <div class="calc_clear"></div>
        <div id="calc_error"></div>
    </div>
    <div class="input-group">

    </div>
    
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="calc.js"></script>
</body>
</html>
