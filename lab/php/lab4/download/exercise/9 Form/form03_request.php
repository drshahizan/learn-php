<?php
   if( isset($_REQUEST["submit"])) {
      echo "Welcome ". $_REQUEST['name']. "<br />";
      echo "You are ". $_REQUEST['age']. " years old.";

      exit();
   }
?>
<html>
   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" name="submit" />
      </form>

   </body>
</html>


<!--
The $_REQUEST variable
The PHP $_REQUEST variable contains the contents of both $_GET, $_POST, and $_COOKIE.
We will discuss $_COOKIE variable when we will explain about cookies.

The PHP $_REQUEST variable can be used to get the result from form data sent
with both the GET and POST methods.

Try out following example by putting the source code in test.php script.
-->
