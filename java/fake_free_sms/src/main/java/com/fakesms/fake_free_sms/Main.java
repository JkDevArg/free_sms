package com.fakesms.fake_free_sms;

import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;

public class Main extends Application {

    public static void main(String[] args) {
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) {
        primaryStage.setTitle("Textbelt SMS Sender");

        GridPane grid = new GridPane();
        grid.setAlignment(Pos.CENTER);
        grid.setHgap(10);
        grid.setVgap(10);
        grid.setPadding(new Insets(25, 25, 25, 25));

        Label phoneNumberLabel = new Label("Phone Number:");
        grid.add(phoneNumberLabel, 0, 1);

        TextField phoneNumberTextField = new TextField();
        grid.add(phoneNumberTextField, 1, 1);

        Label messageLabel = new Label("Message:");
        grid.add(messageLabel, 0, 2);

        TextField messageTextField = new TextField();
        grid.add(messageTextField, 1, 2);

        Button sendButton = new Button("Send");
        grid.add(sendButton, 1, 3);

        sendButton.setOnAction(e -> {
            String phoneNumber = phoneNumberTextField.getText();
            String message = messageTextField.getText();
            String key = "textbelt"; // replace key

            String response = TextBeltClient.sendMessage(phoneNumber, message, key);
            showAlert(response);
        });

        Scene scene = new Scene(grid, 400, 275);
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    private void showAlert(String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Textbelt Response");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
}