Lab 10: QR Code Generator

Group:

    1. Name: SHARVIN A/L M.GUNALAN,          Matrix No: SX221955ECJHF04 , Github ID: Sharvin01
    2. Name: SUBAHSHINI A/P SANGARA LINGAM,  Matrix No: SX220328ECJHS04 , Github ID: Subahshini15
    3. Name: MUHAMMAD FAIZAL BIN ASARAB ALI, Matrix No: SX221609ECJHF04 , Github ID: Faizal994
    4. Name: MOGANAKUMARAN A/L SELVAKUMARAN, Matrix No: SX211706ECRHF04 , Github ID: RN1310



File 📁: 10 QR Code Generator

# Lab 10: QR Code Generator

Activity 🏆 :
## Q1: How are QR codes generated?
Ans:
QR codes are generated using the qrserver API in this application. The application allows users to enter text or a URL, and then it sends a request to the qrserver API with the provided data. The qrserver API generates a QR code image based on the data and returns the image to the application. The application then displays the QR code to the user.

## Q2: QR should be resized to 300x300.
Ans:
To resize the QR, we can change in style.css file and look for line below;
.qr-code img{
  width: 170px;
}
and then change the 170px to 300px

## Q3: What data is sent to the Api Server?
Ans:
The data sent to the API server is the text or URL entered by the user. It is the information that will be encoded into the QR code. The application takes the user input, constructs a request to the qrserver API with the data, and sends it to the server for QR code generation.

## Q4: What is the function of a wrapper?
Ans:
In the context of this application, the wrapper function serves as a layer of abstraction that encapsulates the logic for interacting with the qrserver API. It provides a convenient interface for making requests to the API and handling the response. The wrapper function abstracts away the details of constructing the API request, handling errors, and extracting the QR code image from the response. It simplifies the code and promotes code reusability by encapsulating the API-related functionality into a single function.
