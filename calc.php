<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fucking calculator</title>
</head>
<body>
    <h1>FUCK THIS FUCKING CALCULATOR</h1>
    <form method="get">
        <?php
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : '';
        $operator = isset($_GET['operator']) ? $_GET['operator'] : '+';
        ?>
        <input type="number" name="num1" value="<?php echo $num1 ?>">
        <select name="operator" id="operator">
            <option value="+"<?php if ($operator == '+') echo 'selected'; ?>>+</option>
            <option value="-"<?php if ($operator == '-') echo 'selected'; ?>>-</option>
            <option value="*"<?php if ($operator == '*') echo 'selected'; ?>>*</option>
            <option value="/"<?php if ($operator == '/') echo 'selected'; ?>>/</option>
        </select>
        <input type="number" name="num2" value="<?php echo $num2 ?>">
        
        <input type="submit" value="=">      <?php
    if (!empty($num1) && !empty($num2)) {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Ошибка: деление на ноль!";
                }
                break;
            default:
                $result = "Неверный оператор!";
                break;
        }
        echo $result;
    }?>
    </form>
    
    

    
</body>
</html>