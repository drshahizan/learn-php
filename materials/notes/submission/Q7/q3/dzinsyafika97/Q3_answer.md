<!DOCTYPE html>
<html>
<head>
<style>
</style>
<script>
function checkForm() {
  var phoneNumber = document.getElementById('phone').value;
  var email = document.getElementById('email').value;
  var birthdate = document.getElementById('birthdate').value;
  var agreeBox = document.getElementById('agree_box').checked;
  
  // Validate phone number format
  var phoneRegex = /^\+601\d{1}-\d{4} \d{4}$/;
  if (!phoneRegex.test(phoneNumber)) {
    alert('Please enter a valid phone number in the format +601x-xxxx xxxx.');
    return false;
  }
  
  // Validate email format
  var emailRegex = /^[\w-]+(\.[\w-]+)*@utm\.my$/;
  if (!emailRegex.test(email)) {
    alert('Please enter a valid email ending with @utm.my.');
    return false;
  }
  
  // Validate birthdate
  var birthdateLimit = new Date('2000-01-01');
  var selectedDate = new Date(birthdate);
  if (selectedDate >= birthdateLimit) {
    alert('Please select a birthdate before 1 Jan 2000.');
    return false;
  }
  
  // Validate agreement checkbox
  if (!agreeBox) {
    alert('Please agree to the terms and conditions.');
    return false;
  }
  
  // If all validations pass, the form can be submitted
  return true;
}
</script>
</head>
<body>
<h3>Online Survey</h3>
<p>You are being invited to participate in the following survey. You have the right to withdraw from the research study at any time.</p>
<form onsubmit="return checkForm()">
  <table>
    <tr>
      <td>Phone Number:</td>
      <td><input type="text" id="phone"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" id="email"></td>
    </tr>
    <tr>
      <td>Birthdate:</td>
      <td><input type="date" id="birthdate" name="birthdate"></td>
    </tr>
    <tr>
      <td><input type="checkbox" id="agree_box"></td>
      <td>I agree with the terms and conditions</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit"></td>
    </tr>
  </table>
</form>
</body>
</html>
