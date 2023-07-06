# Lab 10: QR Code Generator 

> Activity 🏆 :
> - How are QR codes generated?

QR codes are generated using the https://api.qrserver.com/v1/create-qr-code/ API. The code takes the value entered in the input field, generates a QR code using the API, and displays the QR code image.


> - QR should be resized to 300x300.

To resize the generated QR code to 300x300, you can modify the URL used to fetch the QR code image. Update the src attribute of the qrImg element to include the desired size parameter:
```js
qrImg.src = `https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=${qrValue}`;
```
This will generate a QR code image with a size of 300x300 pixels.


> - What data is sent to the Api Server?

The data sent to the API server is the value entered in the input field (qrValue). It is passed as a parameter in the URL when fetching the QR code image.


> - What is the function of a wrapper?

In the provided code, the <div class="wrapper"> element acts as a container for the QR code generator. It provides a structured layout for the header, form, and QR code elements. The wrapper element is also used to apply CSS styles and transitions to create an interactive user interface. Additionally, the active class is toggled on the wrapper element to control the visibility and height of the QR code section when a QR code is generated.


Group:
1. Name: AMMAR IBRAHIM BIN MOHAMED, Matrix No: SX220326ECJH, Github ID: ammaribrahim95
2. Name: SHANMUGADHARSHINI A/P MURALI Matrix No: SX201656ECRHF04, Github ID: Shan9821
3. Name: LOGESWARY A/P KRISHNAMOORTHY, Matrix No: SX211705ECRHF04, Github ID: Logeswary98
4. Name: ADAM SHAH BIN MOHD FAIZAL, Matrix No: SX190401CSJS04 , Github ID: adamshahmf