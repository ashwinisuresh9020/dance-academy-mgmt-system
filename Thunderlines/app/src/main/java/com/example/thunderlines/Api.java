package com.example.thunderlines;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;

import org.json.JSONObject;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

public interface Api {

    String BASE_URL = "http://192.168.0.103/dance-academy/";

    @POST("service_call.php?servicecall=student_register")
    @FormUrlEncoded
    Call<JsonObject> regStudent(@Field("full_name") String studentName, @Field("date_of_birth") String studentDob,
                                @Field("gender") String studentGender, @Field("address") String studentAddress,
                                @Field("place") String studentPlace, @Field("pincode") String studentPincode,
                                @Field("district") String studentDistrict, @Field("email") String studentEmail,
                                @Field("mobile") String studentMobile, @Field("password") String studentPassword,
                                @Field("nearest_branch") String studentBranch);

    @POST("service_call.php?servicecall=student_login")
    @FormUrlEncoded
    Call<JsonObject> studentLogin(@Field("email") String studentMail, @Field("password") String studentPass);

    @POST("service_call.php?servicecall=get_branches")
    Call<JsonArray> getBranches();

    @POST("service_call.php?servicecall=get_dances")
    Call<JsonArray> getDances();

    @POST("service_call.php?servicecall=get_events")
    Call<JsonArray> getEvents();

    @POST("service_call.php?servicecall=add_student_dance")
    @FormUrlEncoded
    Call<JsonObject> addStudentDance(@Field("student_id") String studentId, @Field("dance_id") String danceId);

    @POST("service_call.php?servicecall=get_fee_dues")
    @FormUrlEncoded
    Call<JsonObject> getFeeDues(@Field("user_id") String userId);

    @POST("service_call.php?servicecall=get_messages")
    @FormUrlEncoded
    Call<JsonArray> getChats(@Field("student_id") String studentId);

    @POST("service_call.php?servicecall=send_message")
    @FormUrlEncoded
    Call<JsonObject> sendMessage(@Field("student_id") String studentId, @Field("message") String message);

    @POST("service_call.php?servicecall=update_student")
    @FormUrlEncoded
    Call<JsonObject> updateStudent(@Field("student_id") String studentId, @Field("student_name") String studentName,
                                   @Field("student_mob") String studentMobile, @Field("student_addr") String studentAddress,
                                   @Field("student_place") String studentPlace, @Field("student_pin") String studentPin,
                                   @Field("student_dst") String studentDistrict);

    @POST("service_call.php?servicecall=change_pass")
    @FormUrlEncoded
    Call<JsonObject> changePassword(@Field("student_email") String studentEmail, @Field("old_pass") String oldPassword, @Field("new_pass") String newPassword);
}
