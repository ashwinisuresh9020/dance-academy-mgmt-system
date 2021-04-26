package com.example.thunderlines;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.gson.JsonObject;

import org.json.JSONException;
import org.json.JSONObject;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class LoginActivity extends AppCompatActivity {

    EditText et_email, et_pass;
    Button btn_login, btn_register;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        et_email = findViewById(R.id.login_et_email);
        et_pass = findViewById(R.id.login_et_pass);
        btn_login = findViewById(R.id.login_btn_login);
        btn_register = findViewById(R.id.login_btn_register);

        if(SharedPrefManager.getInstance(this).isLoggedIn())
        {
            finish();
            startActivity(new Intent(this, HomeActivity.class));
            return;
        }

        btn_register.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent basicIntent = new Intent(LoginActivity.this, BasicDetailsActivity.class);
                startActivity(basicIntent);
                finish();
            }
        });

        btn_login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if (et_email.getText().toString().isEmpty())
                {
                    et_email.setError("Please enter email");
                    et_email.requestFocus();
                }
                else if (et_pass.getText().toString().isEmpty())
                {
                    et_pass.setError("Please enter password");
                    et_pass.requestFocus();
                }
                else
                {
                    Call<JsonObject> studentLoginCall = RetrofitClient.getInstance().getMyApi().studentLogin(et_email.getText().toString().trim(),et_pass.getText().toString().trim());
                    studentLoginCall.enqueue(new Callback<JsonObject>() {
                        @Override
                        public void onResponse(Call<JsonObject> call, Response<JsonObject> response) {

                            if (response.isSuccessful())
                            {
                                try
                                {
                                    JSONObject jsonObject = new JSONObject(response.body().toString());
                                    if (!jsonObject.getBoolean("error"))
                                    {
                                        Toast.makeText(LoginActivity.this, jsonObject.getString("message"), Toast.LENGTH_SHORT).show();
                                        JSONObject studentObject =  jsonObject.getJSONObject("student");
                                        Student student = new Student(studentObject.getInt("stud_id"),
                                                studentObject.getString("stud_name"),studentObject.getString("stud_dob"),
                                                studentObject.getString("stud_gender"),studentObject.getString("stud_address"),
                                                studentObject.getString("stud_place"),studentObject.getString("stud_pin"),
                                                studentObject.getString("stud_dst"),studentObject.getString("stud_mobile"),
                                                studentObject.getString("stud_email"),studentObject.getString("stud_branch"));

                                        SharedPrefManager.getInstance(getApplicationContext()).userLogin(student);
                                        Intent homeIntent = new Intent(LoginActivity.this, HomeActivity.class);
                                        startActivity(homeIntent);
                                        finish();
                                    }
                                    else
                                    {
                                        Toast.makeText(LoginActivity.this, jsonObject.getString("message"), Toast.LENGTH_SHORT).show();
                                    }
                                }
                                catch (JSONException e)
                                {
                                    e.printStackTrace();
                                }
                            }
                        }

                        @Override
                        public void onFailure(Call<JsonObject> call, Throwable t) {

                            Toast.makeText(LoginActivity.this, t.getMessage(), Toast.LENGTH_SHORT).show();

                        }
                    });
                }
            }
        });
    }
}