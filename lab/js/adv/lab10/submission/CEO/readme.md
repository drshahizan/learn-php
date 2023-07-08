# Lab 10: QR Code Generator

Activity 🏆 :
## Q1: How are QR codes generated?
Ans:
The qrImg.src attribute is set to a URL that generates a QR code using the qrValue as the data. The URL used is https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrValue}.

## Q2: QR should be resized to 300x300.
Ans:
To resize the QR, we can change in style.css file and look for line below;
.qr-code img{
  width: 170px;
}

and then change the 170px to 300px

## Q3: What data is sent to the Api Server?
Ans:
The data sent to the API server is the value of the qrValue variable, which is derived from the user input. The qrValue variable holds the user input obtained from the qrInput element. It is then appended to the API server URL as the data parameter. The constructed URL is used as the src attribute for the qrImg element, which triggers a request to the API server.

## Q4: What is the function of a wrapper?
Ans:
Overall, the wrapper element provides structure, organization, and visual styling to the QR code generator components, contributing to the overall functionality and user interface of the application.


<!--
            JavaScript adv: Lab 10
            Group:
            1. Name: ISMAIL BIN AMAN, Matrix No: SX211939ECJHF04, Github ID: oldpistol
            2. Name: SEPRIYANDI BIN AGUSR, Matrix No: SX211697ECRHF04, Github ID: sepz36
            3. Name: MUHAMMAD AZAM BIN AZMAN, Matrix No: SX211707ECRHF04, Github ID: Azamazman96
            4. Name: MUHAMMAD BADRUL AMIN BIN MASROL, Matrix No: SX220346ECJHS04, Github ID: badz20  
-->