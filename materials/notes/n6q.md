<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# PHP: Form & Session & Cookies
Please answer the following 50 multiple-choice questions to test your knowledge in Form & Session & Cookies. You must place your answer file in the submission folder. Within the [`submission/Q6/set_a`](./submission/Q6/set_a) folder, create a folder called your `github_id`. 

1. Which PHP superglobal variable is used to retrieve form data sent with the HTTP GET method?
   - a) $_GET
   - b) $_POST
   - c) $_REQUEST
   - d) $_SERVER

2. How can you start a new session in PHP?
   - a) session_open()
   - b) session_start()
   - c) start_session()
   - d) open_session()

3. Which function is used to set a cookie in PHP?
   - a) set_cookie()
   - b) create_cookie()
   - c) setcookie()
   - d) createcookie()

4. Which PHP superglobal variable is used to access session data?
   - a) $_SESSION
   - b) $_COOKIE
   - c) $_REQUEST
   - d) $_SERVER

5. How can you destroy a session in PHP?
   - a) session_destroy()
   - b) destroy_session()
   - c) unset_session()
   - d) end_session()

6. Which function is used to check if a cookie is set in PHP?
   - a) isset_cookie()
   - b) cookie_isset()
   - c) cookie_set()
   - d) isset($_COOKIE['cookie_name'])

7. How can you retrieve the value of a specific cookie in PHP?
   - a) $_COOKIE['cookie_name']
   - b) $_SESSION['cookie_name']
   - c) $_GET['cookie_name']
   - d) $_POST['cookie_name']

8. How can you unset a specific session variable in PHP?
   - a) unset($_SESSION['variable_name'])
   - b) unset_session('variable_name')
   - c) session_unset('variable_name')
   - d) session_unset($_SESSION['variable_name'])

9. How can you set the expiration time for a cookie in PHP?
   - a) By using the `set_cookie_expiration()` function
   - b) By specifying the expiration time in the `setcookie()` function
   - c) By setting the `$_COOKIE_EXPIRATION` constant
   - d) Cookies do not have an expiration time in PHP

10. How can you check if a session variable is set in PHP?
    - a) isset($_SESSION['variable_name'])
    - b) session_isset('variable_name')
    - c) isset_session('variable_name')
    - d) isset_variable('variable_name')

11. Which PHP function is used to sanitize user input to prevent security vulnerabilities?
    - a) sanitize_input()
    - b) secure_input()
    - c) filter_input()
    - d) clean_input()

12. How can you retrieve the number of elements in an array stored in a session variable?
    - a) count($_SESSION['array_variable'])
    - b) sizeof($_SESSION['array_variable'])
    - c) length($_SESSION['array_variable'])
    - d) lengthof($_SESSION['array_variable'])

13. How can you redirect the user to another page using PHP?
    - a) redirect('new_page.php')
    - b) header('Location: new_page.php')
    - c) go_to('new_page.php')
    - d) change_page('new_page.php')

14. How can you retrieve the current session ID in PHP?
    - a) $_SESSION_ID
    - b) session_id()
    - c) get_session_id()
    - d) current_session_id()

15. Which function is used to encode special characters in a string to prevent cross-site scripting (XSS) attacks?
    - a) strip_tags()
    - b) htmlspecialchars()
    - c) htmlentities()
    - d) escape_chars()

16. How can you retrieve the value of a specific query string parameter in PHP?
    - a) $_GET['parameter_name']
    - b) $_REQUEST['parameter_name']
    - c) $_POST['parameter_name']
    - d) $_QUERY['parameter_name']

17. How can you retrieve the IP address of the client accessing your PHP script?
    - a) $_SERVER['IP_ADDRESS']
    - b) $_CLIENT_IP
    - c) $_SERVER['REMOTE_ADDR']
    - d) $_USER_IP

18. How can you store an array in a session variable in PHP?
    - a) $_SESSION['array_variable'] = array(...)
    - b) $_SESSION['array_variable'][] = ...
    - c) $_SESSION[] = array_variable(...)
    - d) session_array_variable(...) = array(...)

19. How can you prevent a form from being submitted if certain conditions are not met using JavaScript and PHP?
    - a) By using the `preventDefault()` function in JavaScript and validating the form on the server-side using PHP
    - b) By using the `return false` statement in JavaScript and validating the form on the server-side using PHP
    - c) By using the `onsubmit` attribute in the HTML form tag and validating the form on the server-side using PHP
    - d) By using the `stopPropagation()` function in JavaScript and validating the form on the server-side using PHP

20. How can you check if a specific cookie is set in PHP?
    - a) isset($_COOKIE['cookie_name'])
    - b) cookie_isset('cookie_name')
    - c) cookie_set('cookie_name')
    - d) isset_cookie('cookie_name')

21. How can you display a success message after submitting a form using PHP?
    - a) By echoing a success message in the PHP script that processes the form
    - b) By using the `header()` function to redirect to a success page with a success message
    - c) By setting a session variable with a success message and displaying it on the redirected page
    - d) By using the `print_success_message()` function in PHP to display the message

22. How can you delete a specific cookie in PHP?
    - a) setcookie('cookie_name', '', time() - 3600);
    - b) delete_cookie('cookie_name');
    - c) unset($_COOKIE['cookie_name']);
    - d) cookie_delete('cookie_name');

23. How can you check if a form input field is empty using PHP?
    - a) if ($_POST['field_name'] === '')
    - b) if ($_POST['field_name'] == '')
    - c) if (empty($_POST['field_name']))
    - d) if (isset($_POST['field_name']))

24. How can you retrieve the value of a specific session variable in PHP?
    - a) $_SESSION['variable_name']
    - b) get_session_variable('variable_name')
    - c) session_get('variable_name')
    - d) $_SESSION_GET['variable_name']

25. How can you prevent cross-site scripting (XSS) attacks when displaying user input on a webpage in PHP?
    - a) By using the `strip_tags()` function to remove HTML tags from the input
    - b) By using the `htmlspecialchars()` function to encode special characters in the input
    - c) By using the `htmlentities()` function to encode special characters in the input
    - d) By using the `validate_input()` function to validate the input against a set of rules

26. How can you check if a session is active in PHP?
    - a) if (session_status() === PHP_SESSION_ACTIVE)
    - b) if (session_active())
    - c) if (isset($_SESSION))
    - d) if (session_active() === true)

27. How can you set the lifetime of a session in PHP?
    - a) By setting the `session_lifetime` configuration directive in the php.ini file
    - b) By using the `session_set_lifetime()` function
    - c) By setting the `session.cookie_lifetime` configuration directive in the php.ini file
    - d) By using the `set_session_lifetime()` function

28. How can you retrieve the value of a specific form input field using PHP?
    - a) $_POST['input_field_name']
    - b) $_REQUEST['input_field_name']
    - c) $_GET['input_field_name']
    - d) $_FORM['input_field_name']

29. How can you set a session variable in PHP?
    - a) $_SESSION['variable_name'] = value;
    - b) set_session_variable('variable_name', value);
    - c) session_set('variable_name', value);
    - d) $_SET['variable_name'] = value;

30. How can you display the current session ID in PHP?
    - a) echo session_id();
    - b) echo $_SESSION_ID;
    - c) echo get_session_id();
    - d) echo current_session_id();

31. How can you prevent a form from being submitted multiple times using PHP?
    - a) By disabling the submit button after the form is submitted
    - b) By using the `header()` function to redirect after the form is submitted
    - c) By setting a session variable after the form is submitted and checking its value on subsequent submissions
    - d) By using JavaScript to validate and disable the form submission button

32. How can you retrieve the value of a specific cookie using PHP?
    - a) $_COOKIE['cookie_name']
    - b) get_cookie('cookie_name')
    - c) cookie_get('cookie_name')
    - d) $_COOKIE_GET['cookie_name']

33. How can you store a value in a cookie that will expire in one hour using PHP?
    - a) setcookie('cookie_name', 'value', time() + 3600);
    - b) create_cookie('cookie_name', 'value', time() + 3600);
    - c) $_COOKIE['cookie_name'] = 'value'; (The expiration time is set automatically)
    - d) set_cookie_expiration('cookie_name', 'value', 3600);

34. How can you check if a specific session variable is set in PHP?
    - a) isset($_SESSION['variable_name'])
    - b) session_isset('variable_name')
    - c) isset_session('variable_name')
    - d) isset_variable('variable_name')

35. How can you prevent form injection attacks in PHP?
    - a) By using prepared statements and parameterized queries when interacting with a database
    - b) By validating and sanitizing user input before processing it
    - c) By implementing CAPTCHA to ensure the user is not a bot
    - d) By encrypting sensitive form data before storing it

36. How can you unset all session variables in PHP?
    - a) session_unset()
    - b) unset_session_variables()
    - c) $_SESSION = array()
    - d) destroy_session()

37. How can you store an array of values in a cookie using PHP?
    - a) By serializing the array and storing it in a single cookie value
    - b) By creating multiple cookies, each

 storing a single value from the array
    - c) By converting the array to JSON and storing it in a cookie
    - d) Cookies cannot store arrays in PHP

38. How can you retrieve the value of a specific form input field using the POST method in PHP?
    - a) $_POST['input_field_name']
    - b) $_REQUEST['input_field_name']
    - c) $_GET['input_field_name']
    - d) $_FORM['input_field_name']

39. How can you retrieve the value of a specific session variable using PHP?
    - a) $_SESSION['variable_name']
    - b) get_session_variable('variable_name')
    - c) session_get('variable_name')
    - d) $_SESSION_GET['variable_name']

40. How can you clear all cookies in PHP?
    - a) By setting each cookie to an empty value using the `setcookie()` function
    - b) By using the `clear_cookies()` function
    - c) By using the `unset($_COOKIE)` statement
    - d) Cookies cannot be cleared programmatically

41. How can you store a value in a session variable using PHP?
    - a) $_SESSION['variable_name'] = value;
    - b) set_session_variable('variable_name', value);
    - c) session_set('variable_name', value);
    - d) $_SET['variable_name'] = value;

42. How can you check if a specific cookie is set in PHP?
    - a) isset($_COOKIE['cookie_name'])
    - b) cookie_isset('cookie_name')
    - c) cookie_set('cookie_name')
    - d) isset_cookie('cookie_name')

43. How can you retrieve the value of a specific session variable using the GET method in PHP?
    - a) $_GET['variable_name']
    - b) $_REQUEST['variable_name']
    - c) $_SESSION['variable_name']
    - d) $_SESSION_GET['variable_name']

44. How can you delete a specific cookie in PHP?
    - a) setcookie('cookie_name', '', time() - 3600);
    - b) delete_cookie('cookie_name');
    - c) unset($_COOKIE['cookie_name']);
    - d) cookie_delete('cookie_name');

45. How can you check if a form input field is empty using PHP?
    - a) if ($_POST['field_name'] === '')
    - b) if ($_POST['field_name'] == '')
    - c) if (empty($_POST['field_name']))
    - d) if (isset($_POST['field_name']))

46. How can you retrieve the current session ID in PHP?
    - a) session_id()
    - b) $_SESSION_ID
    - c) get_session_id()
    - d) current_session_id()

47. How can you set a cookie that is accessible only through HTTP and not JavaScript in PHP?
    - a) setcookie('cookie_name', 'value', time() + 3600, '/', '', false, true);
    - b) setcookie('cookie_name', 'value', time() + 3600, '/', '', true, false);
    - c) setcookie('cookie_name', 'value', time() + 3600, '/', '', true, true);
    - d) setcookie('cookie_name', 'value', time() + 3600, '/', '', false, false);

48. How can you retrieve the client's browser name and version in PHP?
    - a) $_SERVER['HTTP_USER_AGENT']
    - b) $_BROWSER['user_agent']
    - c) $_CLIENT_AGENT
    - d) get_browser()

49. How can you store user preferences using cookies in PHP?
    - a) By storing the preferences in a JSON-encoded string and setting it as a cookie value
    - b) By creating a separate cookie for each preference
    - c) By storing the preferences in a session variable instead of a cookie
    - d) Cookies cannot be used to store user preferences

50. How can you retrieve the number of elements in an array stored in a session variable in PHP?
    - a) count($_SESSION['array_variable'])
    - b) sizeof($_SESSION['array_variable'])
    - c) length($_SESSION['array_variable'])
    - d) lengthof($_SESSION['array_variable'])

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://komarev.com/ghpvc/?username=drshahizan&label=Views&color=0e75b6&style=flat)
![](https://hit.yhype.me/github/profile?user_id=81284918)


