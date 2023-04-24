package com.fakesms.fake_free_sms;

import okhttp3.*;

import java.io.IOException;

public class TextBeltClient {
    private static final String API_URL = "https://textbelt.com/text";

    public static String sendMessage(String phoneNumber, String message, String key) {
        OkHttpClient client = new OkHttpClient();
        RequestBody requestBody = new FormBody.Builder()
                .add("phone", phoneNumber)
                .add("message", message)
                .add("key", key)
                .build();

        Request request = new Request.Builder()
                .url(API_URL)
                .post(requestBody)
                .build();

        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        } catch (IOException e) {
            e.printStackTrace();
            return "Error server: " + e.getMessage();
        }
    }
}