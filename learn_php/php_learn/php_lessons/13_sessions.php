
<?php 
session_start();

if(isset($_POST['submit'])){
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  
    $password = $_POST['password']; 

  if ($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php_learn/extras/dashboard.php');
    } else {
    echo 'Incorrect Login';
    }
}

?>

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method = "POST">
<div>
<label for="username">Username: </label>
<input type="text" name="username">
</div>
<div>
<label for="password">Password: </label>
<input type="password" name="password">
</div>
<input type="submit" value="Submit" name="submit">
</form>

