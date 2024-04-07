<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><br><br>
<h1><center>IPHONE STYLE CALCULATOR</center></h1>
<br>
<br>
<form name="calculator" method="POST">
    <div class="calculator">
        <input type="text" id="display" name="display" value="<?php echo isset($_POST['display']) ? $_POST['display'] : '' ?>" oninput="this.form.submit()">
        <input type="text" id="auto_display" name="auto_display" value="<?php echo isset($auto_result) ? $auto_result : ''; ?>" readonly>
        <button name="clear" value="C">C</button>
        <button name="clear_all" value="CA">CA</button>
        <button name="number" value="9">9</button>
        <button name="number" value="8">8</button>
        <button name="number" value="7">7</button>
        <button class="operator" name="operator" value="+">+</button>
        <button name="number" value="6">6</button>
        <button name="number" value="5">5</button>
        <button name="number" value="4">4</button>
        <button class="operator" name="operator" value="-">-</button>
        <button name="number" value="3">3</button>
        <button name="number" value="2">2</button>
        <button name="number" value="1">1</button>
        <button class="operator" name="operator" value="x">x</button>
        <button name="number" value="0">0</button>
        <button name="decimal" value=".">.</button>
        <button type="submit" name="calculate" value="=">=</button>
        <button class="operator" name="operator" value="/">/</button>
        <button class="operator" name="operator" value="%">%</button>
    </div>
</form>

<?php
if (isset($_POST['number']) || isset($_POST['operator']) || isset($_POST['clear']) || isset($_POST['clear_all']) || isset($_POST['decimal']) || isset($_POST['calculate'])) {
    if (isset($_POST['number'])) {
        $display_value = $_POST['display'] . $_POST['number'];
        $expression = $_POST['display'] . $_POST['number'];
    } elseif (isset($_POST['operator'])) {
        $current_operator = $_POST['operator'];
        $expression = $_POST['display'];
        // Check if the display is empty or only contains a decimal point
        if ($expression === '' || $expression === '.') {
            // Display an error message for operators entered first
            $display_value = 'Error';
            $expression = ''; // Clear the expression
        } else {
            // Check if a operator is already present
            if ($current_operator === '%' && strpos($expression, '%') === false) {
                $display_value = $expression . ' ' . $current_operator . ' ';
            } elseif (in_array($current_operator, ['+', '-', '*', '/']) && strpos($expression, $current_operator) === false) {
                $display_value = $expression . ' ' . $current_operator . ' ';
            } else {
                $display_value = $expression;
            }
        }
    } elseif (isset($_POST['clear'])) {
        $display_value = substr($_POST['display'], 0, -1);
        $expression = substr($_POST['display'], 0, -1);
    } elseif (isset($_POST['clear_all'])) {
        $display_value = '';
        $expression = '';
    } elseif (isset($_POST['decimal'])) {
        // Check if a decimal point is already present
        if ($_POST['display'] === '') {
            $display_value = '0.';
            $expression = '0.';
        } elseif (strpos($_POST['display'], '.') === false) {
            $display_value = $_POST['display'] . $_POST['decimal'];
            $expression = $_POST['display'] . $_POST['decimal'];
        } else {
            $display_value = $_POST['display'];
            $expression = $_POST['display'];
        }
    } elseif (isset($_POST['calculate'])) {
        $expression = $_POST['display'];
        // Replace % with modulus operator
        $expression = str_replace('%', '%', $expression); // Replace % with %
        if (preg_match('/[^\d\s\.\+\-\*\/%]/', $expression)) {
            echo "<p style='color: red;'>Invalid input!</p>";
        } else {
            $result = eval("return $expression;");
            $display_value = $result;
            $auto_result = $result;
        }
    }
    // Auto calculation
    if (isset($expression) && $expression !== '' && !isset($_POST['calculate'])) {
        try {
            $auto_result = eval("return $expression;");
            echo "<script>document.getElementById('auto_display').value = '$auto_result';</script>";
        } catch (Exception $e) {
            echo "<script>document.getElementById('auto_display').value = ''; </script>";
        }
    }
    echo "<script>document.getElementById('display').value = '$display_value';</script>";
}
?>

</body>
</html>
