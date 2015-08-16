<?php include'template/menu.php'; ?>
<?php include'template/footer.php'; ?>

<h3>Inloggen maar!</h3>

<?php  echo form_open('main/login_validation'); 
       echo validation_errors(); 
       echo"<p>Gebruikersnaam";
       echo "</br>";
	   echo form_input('username');
	   echo"</p>";
	   echo"<p>Wachtwoord";
       echo "</br>";
	   echo form_password('password');
	   echo"</p>";
	   echo"<p>";
      echo form_submit('login_submit','Inloggen');
	   echo"</p>";

       echo form_close();

?>
<a href='<?php echo base_url()."main/signup" ?>'>Ik heb nog geen account.</a>

