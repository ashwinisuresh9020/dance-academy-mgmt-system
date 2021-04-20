package com.example.thunderlines;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;

import org.json.JSONObject;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

public interface Api {

    String BASE_URL = "http://192.168.0.106/dance-academy/";

    @POST("service_call.php?servicecall=student_register")
    @FormUrlEncoded
    Call<JsonObject> regStudent(@Field("full_name") String studentName, @Field("date_of_birth") String studentDob,
                                @Field("gender") String studentGender, @Field("address") String studentAddress,
                                @Field("place") String studentPlace, @Field("pincode") String studentPincode,
                                @Field("district") String studentDistrict, @Field("email") String studentEmail,
                                @Field("mobile") String studentMobile, @Field("password") String studentPassword,
                                @Field("nearest_branch") String studentBranch);

    @POST("service_call.php?servicecall=get_branches")
    Call<JsonArray> getBranches();

}
