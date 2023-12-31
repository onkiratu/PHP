<?php
// Check if the form has been submitted
if(isset($_POST['submit'])) {
  
  // Get the values entered by the user
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];
  
  // Perform the calculation based on the operator selected
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
      $result = $num1 / $num2;
      break;
    default:
      $result = 0;
      break;
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Calculator</title>
  </head>
  <body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="num1">First number:</label>
      <input type="number" name="num1" required>
      <br><br>
      <label for="num2">Second number:</label>
      <input type="number" name="num2" required>
      <br><br>
      <label for="operator">Operator:</label>
      <select name="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <br><br>
      <input type="submit" name="submit" value="Calculate">
    </form>

    <?php if(isset($result)) { ?>
      <h2>Result: <?php echo $result; ?></h2>
    <?php } ?>
  </body>
</html>
