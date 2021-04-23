package com.example.thunderlines;

public class Student {

    int studentId;
    String studentName, studentDob, studentGender, studentAddress, studentPlace, studentPinCode, studentDistrict, studentMobile, studentEmail, studentBranch;

    public Student(int studentId, String studentName, String studentDob, String studentGender, String studentAddress, String studentPlace, String studentPinCode, String studentDistrict, String studentMobile, String studentEmail, String studentBranch) {
        this.studentId = studentId;
        this.studentName = studentName;
        this.studentDob = studentDob;
        this.studentGender = studentGender;
        this.studentAddress = studentAddress;
        this.studentPlace = studentPlace;
        this.studentPinCode = studentPinCode;
        this.studentDistrict = studentDistrict;
        this.studentMobile = studentMobile;
        this.studentEmail = studentEmail;
        this.studentBranch = studentBranch;
    }

    public int getStudentId() {
        return studentId;
    }

    public String getStudentName() {
        return studentName;
    }

    public String getStudentDob() {
        return studentDob;
    }

    public String getStudentGender() {
        return studentGender;
    }

    public String getStudentAddress() {
        return studentAddress;
    }

    public String getStudentPlace() {
        return studentPlace;
    }

    public String getStudentPinCode() {
        return studentPinCode;
    }

    public String getStudentDistrict() {
        return studentDistrict;
    }

    public String getStudentMobile() {
        return studentMobile;
    }

    public String getStudentEmail() {
        return studentEmail;
    }

    public String getStudentBranch() {
        return studentBranch;
    }
}
