const key = "textbelt";
const uri = "https://textbelt.com/text";

document.getElementById("send_message").addEventListener("click", __init);
var btn_send = document.getElementById("send_message");

function __init() {
    btn_send.innerHTML = "Wait...";
    btn_send.classList.add("disabled");
    const phone = document.getElementById("phone_number").value;
    const message = document.getElementById("message").value;

    const result = sendMessage(phone, message);
    console.log(result)
    /* if(result){
        var res = document.getElementById("response_function");
        res.classList.remove("d-none");
        res.innerHTML = result;
    } */
}

function sendMessage(phone, message) {
    fetch(uri, {
        method: "post",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            phone: phone,
            message: message,
            key: key,
        }),
    })
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        return data.error;
    });
}