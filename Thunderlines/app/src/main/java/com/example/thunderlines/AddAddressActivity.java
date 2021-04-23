package com.example.thunderlines;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AddAddressActivity extends AppCompatActivity{

    String[] districts = {"Alappuzha","Ernamkulam","Idukki","Kannur","Kasargod","Kollam","Kottayam","Kozhikode",
    "Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"};
    List<String> branch_names;
    ArrayList<Branch> branches;
    Spinner spinnerDistrict, spinnerBranch;
    String district, branch_id, studName, studDob, studMail, studMob, studPass, studGender;
    EditText editTextAddress, editTextPlace, editTextPincode;
    Button buttonNext;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_address);

        spinnerDistrict = findViewById(R.id.address_spin_stud_dst);
        spinnerBranch = findViewById(R.id.address_spin_stud_branch);
        editTextAddress = findViewById(R.id.address_et_stud_address);
        editTextPlace = findViewById(R.id.address_et_stud_place);
        editTextPincode = findViewById(R.id.address_et_stud_pincode);
        buttonNext = findViewById(R.id.address_btn_next);


        branch_names = new ArrayList<>();
        studName = getIntent().getExtras().getString("stud_name");
        studDob = getIntent().getExtras().getString("stud_dob");
        studGender = getIntent().getExtras().getString("stud_gender");
        studMail = getIntent().getExtras().getString("stud_mail");
        studMob = getIntent().getExtras().getString("stud_mob");
        studPass = getIntent().getExtras().getString("stud_pass");

        getBranches();
        branches = new ArrayList<>();
        ArrayAdapter adapter = new ArrayAdapter(this, android.R.layout.simple_spinner_item, districts);

        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinnerDistrict.setAdapter(adapter);

        buttonNext.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if (editTextAddress.getText().toString().isEmpty())
                {
                    editTextAddress.setError("Enter address");
                    editTextAddress.requestFocus();
                }
                else if (editTextPlace.getText().toString().isEmpty())
                {
                    editTextPlace.setError("Enter address");
                    editTextPlace.requestFocus();
                }
                else if (editTextPincode.getText().toString().isEmpty())
                {
                    editTextPincode.setError("Enter address");
                    editTextPincode.requestFocus();
                }
                else
                {

                    Call<JsonObject> regStudentCall = RetrofitClient.getInstance().getMyApi().regStudent(studName,studDob,studGender,editTextAddress.getText().toString(),
                            editTextPlace.getText().toString(),editTextPincode.getText().toString(),district,studMail,studMob,studPass,branch_id);

                    regStudentCall.enqueue(new Callback<JsonObject>() {
                        @Override
                        public void onResponse(Call<JsonObject> call, Response<JsonObject> response) {

                            if (response.isSuccessful())
                            {
                                try
                                {
                                    JSONObject object = new JSONObject(response.body().toString());
                                    if (!object.getBoolean("error"))
                                    {
                                        Toast.makeText(AddAddressActivity.this,object.getString("message"),Toast.LENGTH_SHORT).show();
                                        JSONObject studentObject =  object.getJSONObject("student");
                                        Student student = new Student(studentObject.getInt("stud_id"),
                                                studentObject.getString("stud_name"),studentObject.getString("stud_dob"),
                                                studentObject.getString("stud_gender"),studentObject.getString("stud_address"),
                                                studentObject.getString("stud_place"),studentObject.getString("stud_pin"),
                                                studentObject.getString("stud_dst"),studentObject.getString("stud_mobile"),
                                                studentObject.getString("stud_email"),studentObject.getString("stud_branch"));

                                        SharedPrefManager.getInstance(getApplicationContext()).userLogin(student);
                                        Intent homeIntent = new Intent(AddAddressActivity.this, AddDanceActivity.class);
                                        startActivity(homeIntent);
                                        finish();
                                    }
                                    else
                                    {
                                        Toast.makeText(AddAddressActivity.this,object.getString("message"),Toast.LENGTH_SHORT).show();
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

                            Toast.makeText(AddAddressActivity.this,t.getMessage(),Toast.LENGTH_SHORT).show();

                        }
                    });
                }

            }
        });

        spinnerDistrict.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

                district = districts[position];

            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });

        spinnerBranch.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

                branch_id = String.valueOf(branches.get(position).branchId);

            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });

    }


    private void getBranches()
    {
        Call<JsonArray> getBranchesCall = RetrofitClient.getInstance().getMyApi().getBranches();

        getBranchesCall.enqueue(new Callback<JsonArray>() {
            @Override
            public void onResponse(Call<JsonArray> call, Response<JsonArray> response) {

                if (response.isSuccessful())
                {
                    try
                    {
                        JSONArray array = new JSONArray(response.body().toString());
                        for (int i=0;i<array.length();i++)
                        {
                            JSONObject branchObject = array.getJSONObject(i);

                            branches.add(new Branch(Integer.parseInt(branchObject.getString("branch_id")),
                                    branchObject.getString("branch_landmark"),
                                    branchObject.getString("branch_place"),
                                    branchObject.getString("branch_pincode"),
                                    branchObject.getString("branch_district")));

                            branch_names.add(branchObject.getString("branch_landmark") + " , "+ branchObject.getString("branch_place"));
                            ArrayAdapter arrayAdapter = new ArrayAdapter(AddAddressActivity.this, android.R.layout.simple_spinner_item, branch_names);
                            arrayAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
                            spinnerBranch.setAdapter(arrayAdapter);
                        }
                    }
                    catch (JSONException e)
                    {
                        e.printStackTrace();
                    }
                }
            }

            @Override
            public void onFailure(Call<JsonArray> call, Throwable t) {

                Toast.makeText(AddAddressActivity.this, t.getMessage(), Toast.LENGTH_SHORT).show();
                Log.e( "onFailure:" , t.getMessage() );

            }
        });
    }
}