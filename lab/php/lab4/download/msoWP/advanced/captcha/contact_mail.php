<?php
session_start();
if($_POST["captcha"]==$_SESSION["captcha_code"]){
	print "<p class='success'>Contact Mail Sent.</p>";
	} 
 else {
print "<p class='Error'>Enter Correct Captcha Code.</p>";
}
?>