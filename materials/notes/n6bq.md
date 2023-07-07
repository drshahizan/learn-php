<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Flearn-php&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# PHP: Form & Session & Cookies

## Set B
Please answer the following 50 multiple-choice questions to test your knowledge in Form & Session & Cookies. You must place your answer file in the submission folder. Within the [`submission/Q6/set_b`](./submission/Q6/set_b) folder, create a folder called your `github_id`. 

1. Which superglobal variable is used to retrieve data from a form submitted using the POST method?
   - a) `$_POST`
   - b) `$_GET`
   - c) `$_REQUEST`
   - d) `$_SERVER`

2. How can you check if a form has been submitted in PHP?
   - a) By checking if `$_POST` or `$_GET` is not empty
   - b) By checking if `$_SERVER['REQUEST_METHOD']` is equal to 'POST'
   - c) By checking if `$_REQUEST` contains form data
   - d) By checking if `$_COOKIE` is set

3. Which function is used to start a session in PHP?
   - a) `session_start()`
   - b) `session_open()`
   - c) `session_init()`
   - d) `session_begin()`

4. How can you set a session variable in PHP?
   - a) By assigning a value to `$_SESSION['variable']`
   - b) By using the `set_session()` function
   - c) By using the `session_set()` function
   - d) By assigning a value to `$_COOKIE['variable']`

5. What is the purpose of the `session_destroy()` function in PHP?
   - a) To destroy all session data
   - b) To remove a specific session variable
   - c) To close the session and write session data
   - d) To regenerate the session ID

6. How can you retrieve the value of a session variable in PHP?
   - a) By accessing `$_SESSION['variable']`
   - b) By using the `get_session()` function
   - c) By accessing `$_COOKIE['variable']`
   - d) By using the `retrieve_session()` function

7. Which function is used to set a cookie in PHP?
   - a) `setcookie()`
   - b) `create_cookie()`
   - c) `store_cookie()`
   - d) `cookie_set()`

8. How can you retrieve the value of a cookie in PHP?
   - a) By accessing `$_COOKIE['cookieName']`
   - b) By using the `get_cookie()` function
   - c) By accessing `$_SESSION['cookieName']`
   - d) By using the `retrieve_cookie()` function

9. How can you delete a cookie in PHP?
   - a) By setting the cookie with an empty value and an expired timestamp
   - b) By using the `delete_cookie()` function
   - c) By accessing `$_COOKIE['cookieName']` and assigning it a null value
   - d) By using the `unset_cookie()` function

10. What is the purpose of the `htmlspecialchars()` function in PHP when working with form input?
    - a) To convert special characters to HTML entities
    - b) To validate form input against a specified pattern
    - c) To sanitize form input and prevent SQL injection
    - d) To encode form input in Base64 format

11. Which PHP function is used to check if a session variable is set?
    - a) `isset()`
    - b) `empty()`
    - c) `session_isset()`
    - d) `session_exists()`

12. How can you prevent cross-site scripting (XSS) attacks when displaying user input on a webpage?
    - a) By using `htmlspecialchars()` to encode the output
    - b) By using `strip_tags()` to remove HTML tags
    - c) By using `preg_match()` to validate the input
    - d) By using `urlencode()` to encode the output

13. Which PHP function is used to check if a cookie is set?
    - a) `isset()`
    - b) `empty()`
    - c) `cookie_isset()`
    - d) `cookie_exists()`

14. How can you restrict the lifetime of a cookie in PHP?
    - a) By setting the cookie with an expiration timestamp in the future
    - b) By setting the cookie with an expiration timestamp in the past
    - c) By using the `setcookie_lifetime()` function
    - d) By using the `cookie_set_lifetime()` function

15. What is the purpose of the `session_regenerate_id()` function in PHP?
    - a) To regenerate the session ID to prevent session fixation attacks
    - b) To retrieve the current session ID
    - c) To destroy the current session and start a new one
    - d) To update the session data with a new ID

16. How can you store an array in a session variable in PHP?
    - a) By assigning the array to `$_SESSION['variable']`
    - b) By using the `serialize()` function before assigning the array
    - c) By using the `json_encode()` function before assigning the array
    - d) By converting the array to a string using `implode()` before assigning it

17. Which PHP function is used to check if a form input field is empty?
    - a) `empty()`
    - b) `isset()`
    - c) `is_null()`
    - d) `is_empty()`

18. How can you retrieve the value of a selected option from a dropdown menu in PHP?
    - a) By accessing `$_POST['fieldname']`
    - b) By using the `get_option()` function
    - c) By accessing `$_REQUEST['fieldname']`
    - d) By using the `retrieve_option()` function

19. What is the purpose of the `session_write_close()` function in PHP?
    - a) To close the session and write session data
    - b) To destroy all session data
    - c) To start a new session
    - d) To regenerate the session ID

20. How can you prevent session fixation attacks in PHP?
    - a) By regenerating the session ID after successful login
    - b) By using HTTPS for secure session communication
    - c) By validating session data against a predefined pattern
    - d) By encrypting session data using a secret key

21. Which PHP function is used to retrieve the current session ID?
    - a) `session_id()`
    - b) `session_get_id()`
    - c) `session_current_id()`
    - d) `session_retrieve_id()`

22. How can you destroy a specific session variable in PHP?
    - a) By using the `unset()` function on `$_SESSION['variable']`
    - b) By using the `destroy_session_variable()` function
    - c) By setting `$_SESSION['variable']` to null
    - d) By using the `remove_session_variable()` function

23. What is the purpose of the `session_unset()` function in PHP?
    - a) To remove all session variables
    - b) To remove a specific session variable
    - c) To close the session and write session data
    - d) To regenerate the session ID

24. How can you set a cookie with an expiration date in the past to delete it in PHP?
    - a) By setting the cookie with an expiration timestamp in the past
    - b) By using the `delete_cookie()` function
    - c) By accessing `$_COOKIE['cookieName']` and assigning it a null value
    - d) By using the `unset_cookie()` function

25. What is the purpose of the `session_id()` function in PHP?
    - a) To retrieve the current session ID
    - b) To generate a new session ID
    - c) To validate a session ID against a predefined pattern
    - d) To update the session data with a new ID

26. How can you check if a session variable is empty in PHP?
    - a) By using `empty($_SESSION['variable'])`
    - b) By using `isset($_SESSION['variable'])`
    - c) By using `is_null($_SESSION['variable'])`
    - d) By using `$_SESSION['variable'] == ''`

27. Which PHP function is used to set a session timeout?
    - a) `session_set_timeout()`
    - b) `session_timeout()`
    - c) `set_session_timeout()`
    - d) `ini_set('session.gc_maxlifetime')`

28. How can you check if a cookie is empty in PHP?
    - a) By using `empty($_COOKIE['cookieName'])`
    - b) By using `isset($_COOKIE['cookieName'])`
    - c) By using `is_null($_COOKIE['cookieName'])`
    - d) By using `$_COOKIE['cookieName'] == ''`

29. What is the purpose of the `urlencode()` function in PHP?
    - a) To encode a string for safe use in a URL
    - b) To convert special characters to HTML entities
    - c) To sanitize form input and prevent SQL injection
    - d) To encrypt a string using a secret key

30. How can you retrieve the number of items in a session array in PHP?
    - a) By using the `count()` function on `$_SESSION['array']`
    - b) By using the `sizeof()` function on `$_SESSION['array']`
    - c) By accessing `$_SESSION['array']['length']`
    - d) By using the `get_array_length()` function

31. Which PHP function is used to check if a session is active?
    - a) `session_is_active()`
    - b) `session_status()`
    - c) `session_active()`
    - d) `session_check()`

32. How can you check if a checkbox is checked in PHP?
    - a) By using `isset($_POST['checkboxName'])`
    - b) By using `empty($_POST['checkboxName'])`
    - c) By using `$_POST['checkboxName'] == 'checked'`
    - d) By using `is_null($_POST['checkboxName'])`

33. What is the purpose of the `session_commit()` function in PHP?
    - a) To close the session and write session data
    - b) To destroy all session data
    - c) To start a new session
    - d) To regenerate the session ID

34. How can you store multiple values in a single cookie in PHP?
    - a) By serializing an array and assigning it to the cookie value
    - b) By using `setcookie()` multiple times with different cookie names
    - c) By concatenating the values and assigning them to the cookie value
    - d) By using the `set_cookie_array()` function

35. Which PHP function is used to check if a session has been started?
    - a) `session_is_started()`
    - b) `session_status()`
    - c) `session_started()`
    - d) `session_check_started()`

36. How can you prevent session hijacking in PHP?
    - a) By using a secure session ID generated with a secret key
    - b) By encrypting session data using a private key
    - c) By validating session data against a predefined pattern
    - d) By using CSRF tokens for form submissions

37. How can you check if a session is empty in PHP?
    - a) By using `empty($_SESSION)`
    - b) By using `isset($_SESSION)`
    - c) By using `is_null($_SESSION)`
    - d) By using `$_SESSION == ''`

38. What is the purpose of the `session_abort()` function in PHP?
    - a) To discard session changes and close the session
    - b) To destroy all session data
    - c) To regenerate the session ID
    - d) To update the session data with a new ID

39. How can you restrict the access to a specific page to only logged-in users in PHP?
    - a) By checking if a session variable representing the user's login status is set
    - b) By using the `authenticate_user()` function
    - c) By validating the user's credentials against a database
    - d) By encrypting the page content with a private key

40. Which PHP function is used to check if a cookie domain is secure?
    - a) `is_cookie_secure()`
    - b) `cookie_domain_secure()`
    - c) `cookie_is_secure()`
    - d) `$_COOKIE['secure']`

41. How can you prevent session data from being accessible by JavaScript in PHP?
    - a) By setting the `HttpOnly` flag when setting session cookies
    - b) By using JavaScript to encrypt the session data
    - c) By validating session data against a predefined pattern
    - d) By using AJAX to retrieve session data asynchronously

42. What is the purpose of the `session_gc()` function in PHP?
    - a) To perform garbage collection on expired session data
    - b) To retrieve the current session ID
    - c) To destroy the current session and start a new one
    - d) To update the session data with a new ID

43. How can you set a session timeout in PHP?
    - a) By modifying the `session.gc_maxlifetime` configuration directive
    - b) By using the `set_session_timeout()` function
    - c) By setting `$_SESSION['timeout']` to a specific value
    - d) By using the `session_set_timeout()` function

44. Which PHP function is used to retrieve the value of a cookie?
    - a) `$_COOKIE['cookieName']`
    - b) `retrieve_cookie('cookieName')`
    - c) `get_cookie_value('cookieName')`
    - d) `cookie_value('cookieName')`

45. How can you restrict the access to a specific page to only users with admin privileges in PHP?
    - a) By checking if a session variable representing the user's admin status is set to true
    - b) By using the `validate_admin_user()` function
    - c) By validating the user's credentials against an admin database
    - d) By encrypting the page content with an admin key

46. What is the purpose of the `session_destroy()` function in PHP?
    - a) To destroy all session data
    - b) To remove a specific session variable
    - c) To close the session and write session data
    - d) To regenerate the session ID

47. How can you retrieve the value of a specific cookie in PHP?
    - a) By accessing `$_COOKIE['cookieName']`
    - b) By using the `get_cookie_value('cookieName')` function
    - c) By using `retrieve_cookie('cookieName')`
    - d) By using the `cookie_value('cookieName')` function

48. Which PHP function is used to set the domain for a cookie?
    - a) `set_cookie_domain()`
    - b) `cookie_set_domain()`
    - c) `cookie_domain()`
    - d) `setcookie()` function with the `domain` parameter

49. How can you prevent session fixation attacks in PHP?
    - a) By regenerating the session ID after successful login
    - b) By using HTTP-only cookies for session management
    - c) By validating session data against a predefined pattern
    - d) By using CSRF tokens for form submissions

50. What is the purpose of the `session_save_path()` function in PHP?
    - a) To retrieve the current session save path
    - b) To set the save path for session files
    - c) To destroy the current session and start a new one
    - d) To update the session data with a new ID


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)


