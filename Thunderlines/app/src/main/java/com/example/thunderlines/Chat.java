package com.example.thunderlines;

public class Chat {

    int chatId;
    String sender,message;

    public Chat(int chatId, String sender, String message) {
        this.chatId = chatId;
        this.sender = sender;
        this.message = message;
    }

    public int getChatId() {
        return chatId;
    }

    public String getSender() {
        return sender;
    }

    public String getMessage() {
        return message;
    }
}
