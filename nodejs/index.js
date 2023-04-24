const axios = require("axios");
const express = require("express");
const app = express();
const port = 3000;

app.use(express.json());

app.post("/send-message", async (req, res) => {
    const {
        phone_number,
        message,
        key
    } = req.body;

    const get_key = key ? key : 'textbelt';
    if (!phone_number || !message || !get_key) {
        return res.status(400).json({
            error: "Missing required parameters"
        });
    }

    response = await sendMessage(phone_number, message, get_key);
    res.status(200).json({ message: response });
});

app.listen(port, () => {
    console.log(`Server on port: ${port}`);
});

const sendMessage = async (phone_number, message, key) => {
    try {
        const response = await axios.post("https://textbelt.com/text", {
            phone: phone_number,
            message: message,
            key: key,
        });
        if(response.data['success'] === false){
            return response.data['error'];
        }else{
            return 'Message send successfull';
        }
    } catch (error) {
        console.error("Error on server:", error);
    }
};