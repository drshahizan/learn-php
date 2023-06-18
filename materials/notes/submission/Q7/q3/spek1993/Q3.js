function Check_Form() {
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var birthdate = document.getElementById('birthdate').value;
    var agreeBox = document.getElementById('agree_box');
  
    // Check phone number format
    var phoneRegex = /^\+601\d{1}-\d{4} \d{4}$/;
    if (!phone.match(phoneRegex)) {
      alert('Please enter a phone number in the format +601x-xxxx xxxx.');
      return false;
    }
  
    // Check email format
    var emailRegex = /@utm\.my$/;
    if (!email.match(emailRegex)) {
      alert('Please enter an email ending with @utm.my.');
      return false;
    }
  
    // Check birthdate
    var birthdateObj = new Date(birthdate);
    var limitDate = new Date('2000-01-01');
    if (birthdateObj >= limitDate) {
      alert('Please enter a birthdate before 1 Jan 2000.');
      return false;
    }
  
    // Check agreement checkbox
    if (!agreeBox.checked) {
      alert('Please agree to the terms and conditions.');
      return false;
    }
  
    // If all validation passes, you can submit the form
    return true;
  }