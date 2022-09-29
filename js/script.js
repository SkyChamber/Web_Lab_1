/* check x input */
const x_value_input = document.querySelector("#x_value");
const submit_button = document.querySelector("div.form_wrapper > input[type=submit]");
const message_place = document.querySelector("#x_message");
x_value_input.addEventListener('input', validateX);

function validateX(){
    let text = x_value_input.value;
    let number_text = Number(text);
    if ( text==="" || isNaN(number_text) || !isFinite(number_text) || number_text < -5 || number_text > 5){
        if (text===""){
            submit_button.disabled = true;
        } else {
            submit_button.disabled = true;
            message_place.innerHTML = "<p>Illegal value<br>enter from -5 to 5</p>";
        }
    } else {
        submit_button.disabled = false;
        message_place.innerHTML = "";
    }
}

validateX();
/* --- end --- */

/* select first radiobutton */
document.querySelector("div.radio_wrapper > input[type=radio]").checked = true;
/* --- end --- */