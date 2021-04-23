package com.example.thunderlines;

public class Dance {

    int danceId;
    String danceName;

    public Dance(int danceId, String danceName) {
        this.danceId = danceId;
        this.danceName = danceName;
    }

    public int getDanceId() {
        return danceId;
    }

    public String getDanceName() {
        return danceName;
    }
}
