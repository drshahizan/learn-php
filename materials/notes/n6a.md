<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Flearn-php&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# PHP: Form & Session & Cookies

## Set A

1. a) $_GET
2. b) session_start()
3. c) setcookie()
4. a) $_SESSION
5. a) session_destroy()
6. d) isset($_COOKIE['cookie_name'])
7. a) $_COOKIE['cookie_name']
8. a) unset($_SESSION['variable_name'])
9. b) By specifying the expiration time in the `setcookie()` function
10. a) isset($_SESSION['variable_name'])
11. c) filter_input()
12. a) count($_SESSION['array_variable'])
13. b) header('Location: new_page.php')
14. b) session_id()
15. b) htmlspecialchars()
16. a) $_GET['parameter_name']
17. c) $_SERVER['REMOTE_ADDR']
18. a) $_SESSION['array_variable'] = array(...)
19. a) By using the `preventDefault()` function in JavaScript and validating the form on the server-side using PHP
20. a) isset($_COOKIE['cookie_name'])
21. a) By echoing a success message in the PHP script that processes the form
22. a) setcookie('cookie_name', '', time() - 3600);
23. c) if (empty($_POST['field_name']))
24. a) $_SESSION['variable_name']
25. b) By using the `htmlspecialchars()` function to encode special characters in the input
26. a) if (session_status() === PHP_SESSION_ACTIVE)
27. a) By setting the `session_lifetime` configuration directive in the php.ini file
28. a) $_POST['input_field_name']
29. a) $_SESSION['variable_name'] = value;
30. a) echo session_id();
31. a) By disabling the submit button after the form is submitted
32. a) $_COOKIE['cookie_name']
33. a) setcookie('cookie_name', 'value', time() + 3600);
34. a) isset($_SESSION['variable_name'])
35. a) By using prepared statements and parameterized queries when interacting with a database
36. a) session_unset()
37. a) By serializing the array and storing it in a single cookie value
38. a) $_POST['input_field_name']
39. a) $_SESSION['variable_name']
40. a) By setting each cookie to an empty value using the `setcookie()` function
41. a) $_SESSION['variable_name'] = value;
42. a) isset($_COOKIE['cookie_name'])
43. a) $_GET['variable_name']
44. a) setcookie('cookie_name', '', time() - 3600);
45. a) if ($_POST['field_name'] === '')
46. a) session_id()
47. a) setcookie('cookie_name', 'value', time() + 3600, '/', '', false, true);
48. a) $_SERVER['HTTP_USER_AGENT']
49. a) By storing the preferences in a JSON-encoded string and setting it as a cookie value
50. a) count($_SESSION['array_variable'])

## Set B
Here are the answers to the questions:

1. a) `$_POST`
2. b) By checking if `$_SERVER['REQUEST_METHOD']` is equal to 'POST'
3. a) `session_start()`
4. a) By assigning a value to `$_SESSION['variable']`
5. a) To destroy all session data
6. a) By accessing `$_SESSION['variable']`
7. a) `setcookie()`
8. a) By accessing `$_COOKIE['cookieName']`
9. a) By setting the cookie with an empty value and an expired timestamp
10. a) To convert special characters to HTML entities
11. a) `isset()`
12. a) By using `htmlspecialchars()` to encode the output
13. a) `isset()`
14. a) By setting the cookie with an expiration timestamp in the future
15. a) To regenerate the session ID to prevent session fixation attacks
16. a) By assigning the array to `$_SESSION['variable']`
17. c) `is_null()`
18. a) By accessing `$_POST['fieldname']`
19. a) To close the session and write session data
20. a) By regenerating the session ID after successful login
21. a) `session_id()`
22. a) By using the `unset()` function on `$_SESSION['variable']`
23. a) To remove all session variables
24. a) By setting the cookie with an expiration timestamp in the past
25. a) To retrieve the current session ID
26. a) By using `empty($_SESSION['variable'])`
27. d) `ini_set('session.gc_maxlifetime')`
28. a) By using `empty($_COOKIE['cookieName'])`
29. a) To encode a string for safe use in a URL
30. a) By using the `count()` function on `$_SESSION['array']`
31. a) `session_is_active()`
32. a) By using `isset($_POST['checkboxName'])`
33. a) To perform garbage collection on expired session data
34. a) By serializing an array and assigning it to the cookie value
35. a) `session_is_started()`
36. a) By using a secure session ID generated with a secret key
37. a) By using `empty($_SESSION)`
38. a) To discard session changes and close the session
39. a) By checking if a session variable representing the user's login status is set
40. d) `$_COOKIE['secure']`
41. a) By setting the `HttpOnly` flag when setting session cookies
42. a) To perform garbage collection on expired session data
43. a) By modifying the `session.gc_maxlifetime` configuration directive
44. a) `$_COOKIE['cookieName']`
45. a) By checking if a session variable representing the user's admin status is set to true
46. a) To destroy all session data
47. a) By accessing `$_COOKIE['cookieName']`
48. d) `setcookie()` function with the `domain` parameter
49. a) By regenerating the session ID after successful login
50. b) To set the save path for session files

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)


