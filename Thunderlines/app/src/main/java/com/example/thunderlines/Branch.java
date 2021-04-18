package com.example.thunderlines;

public class Branch {

    int branchId;
    String branchLandmark, branchPlace, branchPincode, branchDistrict;


    public Branch(int branchId, String branchLandmark, String branchPlace, String branchPincode, String branchDistrict) {
        this.branchId = branchId;
        this.branchLandmark = branchLandmark;
        this.branchPlace = branchPlace;
        this.branchPincode = branchPincode;
        this.branchDistrict = branchDistrict;
    }

    public int getBranchId() {
        return branchId;
    }

    public String getBranchLandmark() {
        return branchLandmark;
    }

    public String getBranchPlace() {
        return branchPlace;
    }

    public String getBranchPincode() {
        return branchPincode;
    }

    public String getBranchDistrict() {
        return branchDistrict;
    }
}
