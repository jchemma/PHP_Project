<?php
$message = "";
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $message = "Success!";
}
?>

<html>
<body>    
<form action="" method="post">
<?php echo "$message"; ?>
  <input type="submit" name="SubmitButton"/>
</form>    
</body>
</html>