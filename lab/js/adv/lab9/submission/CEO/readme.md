# Lab 9: currency

Activity 🏆 :
## Q1: Convert RM100 to EUR.
Ans:
100 MYR = 19.75 EUR

## Q2: Please identify the French currency.
Ans:
The currency of France is the Euro (€).

## Q3: You've been asked to change the default setting from US to UK.
Ans:
In script.js, you can change the currency_code == "USD" to currency_code == "GBP"

for (let i = 0; i < dropList.length; i++) {
    for(let currency_code in country_list){
        // selecting USD by default as FROM currency and MYR as TO currency
        let selected = i == 0 ? currency_code == "MYR" ? "selected" : "" : currency_code == "USD" ? "selected" : "";
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
The name of the currency exchange API used in the provided code is "exchangerate-api.com". This API provides exchange rate data for different currencies based on the specified base currency.

<!--
            JavaScript adv: Lab 9
            Group:
            1. Name: ISMAIL BIN AMAN, Matrix No: SX211939ECJHF04, Github ID: oldpistol
            2. Name: SEPRIYANDI BIN AGUSR, Matrix No: SX211697ECRHF04, Github ID: sepz36
            3. Name: MUHAMMAD AZAM BIN AZMAN, Matrix No: SX211707ECRHF04, Github ID: Azamazman96
            4. Name: MUHAMMAD BADRUL AMIN BIN MASROL, Matrix No: SX220346ECJHS04, Github ID: badz20  
-->