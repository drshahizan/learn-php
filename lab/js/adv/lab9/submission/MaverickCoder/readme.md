# Lab 9: currency

Activity 🏆 :
## Q1: Convert RM100 to EUR.
Ans:
1. Select the currencies
2. Enter the amount
3. Convert the currency
RM100 = 19.72EUR

## Q2: Please identify the French currency.
Ans:
The currency of France is the Euro

## Q3: You've been asked to change the default setting from US to UK.
Ans:
From script.js, select currency code of USD then change to GBP as in highlighted as comment below

for (let i = 0; i < dropList.length; i++) {
    for(let currency_code in country_list){
        // selecting USD by default as FROM currency and MYR as TO currency
        let selected = i == 0 ? currency_code == "MYR" ? "selected" : "" : currency_code == "USD" <!--change to GBP--> ? "selected" : "";
        // creating option tag with passing currency code as a text and value
        let optionTag = `<option value="${currency_code}" ${selected}>${currency_code}</option>`;
        // inserting options tag inside select tag
        dropList[i].insertAdjacentHTML("beforeend", optionTag);
    }
    dropList[i].addEventListener("change", e =>{
        loadFlag(e.target); // calling loadFlag with passing target element as an argument
    });
}


## Q4: What is the name of the currency exchange API?
Ans:
Open Exchange Rates API: Open Exchange Rates provides a simple and easy-to-use API for retrieving currency exchange rates. It offers both free and paid plans, with the paid plans providing higher request limits and additional features.

XE Currency API: XE Currency is a well-known currency exchange platform that offers an API for developers to access real-time and historical currency exchange rates. The XE Currency API is available through subscription plans.

CurrencyLayer API: CurrencyLayer is another popular currency exchange API that provides reliable and accurate currency exchange rates. It offers free and paid plans, with the paid plans offering more frequent updates and additional features.

ExchangeRate-API: ExchangeRate-API is a free and simple API that provides currency exchange rates for over 150 currencies. It offers a straightforward and easy-to-use interface for accessing exchange rate data.

Fixer API: Fixer is an API that offers foreign exchange rates and currency conversion capabilities. It provides both free and paid plans, with the paid plans offering more frequent updates and additional features.


<!--
            JavaScript adv: Lab 10
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->