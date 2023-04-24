module com.fakesms.fake_free_sms {
    requires javafx.controls;
    requires javafx.fxml;
    requires okhttp3;

    requires org.kordamp.bootstrapfx.core;

    opens com.fakesms.fake_free_sms to javafx.fxml;
    exports com.fakesms.fake_free_sms;
}