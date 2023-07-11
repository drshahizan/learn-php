Lab 9: currency
Activity 🏆 :

Q1: Convert RM100 to EUR.
> - Convert RM100 to EUR.
<img src="currencyconvert.png">

**Figure 1**: RM100 to EU


Ans: 100 MYR = 19.75 EUR

Q2: Please identify the French currency.
Ans: The currency of France is the Euro (€).

Q3: You've been asked to change the default setting from US to UK.
Ans: In script.js, you can change the currency_code == "USD" to currency_code == "GBP"

for (let i = 0; i < dropList.length; i++) { for(let currency_code in country_list){ // selecting USD by default as FROM currency and MYR as TO currency let selected = i == 0 ? currency_code == "MYR" ? "selected" : "" : currency_code == "USD" ? "selected" : ""; // creating option tag with passing currency code as a text and value let optionTag = <option value="${currency_code}" ${selected}>${currency_code}</option>; // inserting options tag inside select tag dropList[i].insertAdjacentHTML("beforeend", optionTag); } dropList[i].addEventListener("change", e =>{ loadFlag(e.target); // calling loadFlag with passing target element as an argument }); }

Q4: What is the name of the currency exchange API?
Ans: The name of the currency exchange API used in the provided code is "exchangerate-api.com". This API provides exchange rate data for different currencies based on the specified base currency.

Group Mmbers name:
    1. Name: SHARVIN A/L M.GUNALAN,          Matrix No: SX221955ECJHF04 , Github ID: Sharvin01
    2. Name: SUBAHSHINI A/P SANGARA LINGAM,  Matrix No: SX220328ECJHS04 , Github ID: Subahshini15
    3. Name: MUHAMMAD FAIZAL BIN ASARAB ALI, Matrix No: SX221609ECJHF04 , Github ID: Faizal994
    4. Name: MOGANAKUMARAN A/L SELVAKUMARAN, Matrix No: SX211706ECRHF04 , Github ID: RN1310
