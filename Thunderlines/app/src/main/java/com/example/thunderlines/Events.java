package com.example.thunderlines;

public class Events {

    int eventId;
    String eventName, eventDescription, eventImage, eventDate;

    public Events(int eventId, String eventName, String eventDescription, String eventImage, String eventDate) {
        this.eventId = eventId;
        this.eventName = eventName;
        this.eventDescription = eventDescription;
        this.eventImage = eventImage;
        this.eventDate = eventDate;
    }

    public int getEventId() {
        return eventId;
    }

    public String getEventName() {
        return eventName;
    }

    public String getEventDescription() {
        return eventDescription;
    }

    public String getEventImage() {
        return eventImage;
    }

    public String getEventDate() {
        return eventDate;
    }
}
