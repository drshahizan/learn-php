// Create a variable called saying to hold the string that will be usedホームホーム
var saying = 'Home sweet home ';

// Create a variable called msg to hold a message that will be shown on the page
// Find the length of the string, and put this in the msg variable
var msg = '<h2>length</h2><p>' + saying.length + '</p>';
// Convert the string to uppercase and add it to the msg variable
msg += '<h2>uppercase</h2><p>' + saying.toUpperCase() + '</p>';
// Convert the string to lowercase and add it to the msg variable
msg += '<h2>lowercase</h2><p>' + saying.toLowerCase() + '</p>';
// Find the character with an index of 12 in the string and add it to the msg variable
msg += '<h2>character index: 12</h2><p>' + saying.charAt(12) + '</p>';
// Find the index number of the first instance of 'ee' in the string and add it to the msg variable
msg += '<h2>first ee</h2><p>' + saying.indexOf('ee') + '</p>';
// Find the index number of the last instance of the 'e' character in the string and add it to the msg variable
msg += '<h2>last e</h2><p>' + saying.lastIndexOf('e') + '</p>';
// Find the characters with an index number in the 8-14 range in the string and add it to the msg variable
msg += '<h2>character index: 8-14</h2><p>' + saying.substring(8, 14) + '</p>';
// Find the first instance of 'me' in the string and replace it with a 'w' character and add it to the msg variable
msg += '<h2>replace</h2><p>' + saying.replace('me', 'w') + '</p>';

// Create a variable called el to hold the element whose id attribute has a value of info
var el = document.getElementById('info');
// Write the message into that element
el.innerHTML = msg;