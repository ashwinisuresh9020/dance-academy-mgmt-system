package com.example.thunderlines;

import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.FragmentTransaction;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import com.google.gson.JsonObject;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.Arrays;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class EditProfileActivity extends AppCompatActivity {

    EditText editTextName, editTextMobile, editTextAddress, editTextPlace, editTextPincode;
    Spinner spinnerDst;
    Student student;
    String dst;
    Button buttonSave;
    int position;
    boolean isDistrictSelected = false;
    String[] districts = {"Alappuzha","Ernamkulam","Idukki","Kannur","Kasargod","Kollam","Kottayam","Kozhikode",
            "Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_edit_profile);

        student = SharedPrefManager.getInstance(this).getStudent();

        editTextName = findViewById(R.id.edit_et_stud_name);
        editTextMobile = findViewById(R.id.edit_et_stud_mobile);
        editTextAddress = findViewById(R.id.edit_et_stud_address);
        editTextPlace = findViewById(R.id.edit_et_stud_place);
        editTextPincode = findViewById(R.id.edit_et_stud_pincode);
        spinnerDst = findViewById(R.id.edit_spin_stud_dst);
        buttonSave = findViewById(R.id.button_done);

        editTextName.setText(student.getStudentName());
        editTextMobile.setText(student.getStudentMobile());
        editTextAddress.setText(student.getStudentAddress());
        editTextPlace.setText(student.getStudentPlace());
        editTextPincode.setText(student.getStudentPinCode());

        ArrayAdapter adapter = new ArrayAdapter(this, android.R.layout.simple_spinner_item, districts);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinnerDst.setAdapter(adapter);

        spinnerDst.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

                dst = districts[position];
                isDistrictSelected = true;
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

                isDistrictSelected = false;

            }
        });

        buttonSave.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if (editTextName.getText().toString().isEmpty())
                {
                    editTextName.setError("Please enter full name");
                    editTextName.requestFocus();
                }
                else if (editTextMobile.getText().toString().isEmpty())
                {
                    editTextMobile.setError("Please enter mobile number");
                    editTextMobile.requestFocus();
                }
                else if (editTextMobile.getText().toString().length()<10)
                {
                    editTextMobile.setError("Please enter valid mobile number");
                    editTextMobile.requestFocus();
                }
                else if (editTextAddress.getText().toString().isEmpty())
                {
                    editTextAddress.setError("Please enter address");
                    editTextAddress.requestFocus();
                }
                else if (editTextPlace.getText().toString().isEmpty())
                {
                    editTextPlace.setError("Please enter place");
                    editTextPlace.requestFocus();
                }
                else if (editTextPincode.getText().toString().isEmpty())
                {
                    editTextPincode.setError("Please enter pincode");
                    editTextPincode.requestFocus();
                }
                else if (editTextPincode.getText().toString().length()<6)
                {
                    editTextPincode.setError("Please enter valid pincode");
                    editTextPincode.requestFocus();
                }
                else if (isDistrictSelected == false)
                {
                    Toast.makeText(EditProfileActivity.this, "Please select a district", Toast.LENGTH_SHORT).show();
                }
                else
                {
                    Call<JsonObject> updateStudentCall = RetrofitClient.getInstance().getMyApi().updateStudent(String.valueOf(student.getStudentId()),
                            editTextName.getText().toString(),editTextMobile.getText().toString(),editTextAddress.getText().toString(),
                            editTextPlace.getText().toString(),editTextPincode.getText().toString(),dst);

                    updateStudentCall.enqueue(new Callback<JsonObject>() {
                        @Override
                        public void onResponse(Call<JsonObject> call, Response<JsonObject> response) {

                            if (response.isSuccessful())
                            {
                                try
                                {
                                    JSONObject object = new JSONObject(response.body().toString());
                                    if (!object.getBoolean("error"))
                                    {
                                        Toast.makeText(EditProfileActivity.this, object.getString("message"), Toast.LENGTH_SHORT).show();
                                        JSONObject studentObject =  object.getJSONObject("student");
                                        Student student = new Student(studentObject.getInt("stud_id"),
                                                studentObject.getString("stud_name"),studentObject.getString("stud_dob"),
                                                studentObject.getString("stud_gender"),studentObject.getString("stud_address"),
                                                studentObject.getString("stud_place"),studentObject.getString("stud_pin"),
                                                studentObject.getString("stud_dst"),studentObject.getString("stud_mobile"),
                                                studentObject.getString("stud_email"),studentObject.getString("stud_branch"));

                                        SharedPrefManager.getInstance(getApplicationContext()).userLogin(student);
                                        startActivity(new Intent(EditProfileActivity.this, HomeActivity.class));
                                    }
                                    else
                                    {
                                        Toast.makeText(EditProfileActivity.this, object.getString("message"), Toast.LENGTH_SHORT).show();
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

                            Toast.makeText(EditProfileActivity.this, t.getMessage(), Toast.LENGTH_SHORT).show();
                        }
                    });
                }
            }
        });
    }
}