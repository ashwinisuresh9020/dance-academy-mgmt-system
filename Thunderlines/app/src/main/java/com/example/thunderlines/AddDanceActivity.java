package com.example.thunderlines;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
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

public class AddDanceActivity extends AppCompatActivity {

    Button buttonAdd;
    Spinner spinnerDances;
    ArrayList<Dance> danceArrayList;
    String dance_id;
    List<String> dances;
    Student student;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_dance);

        buttonAdd = findViewById(R.id.dance_button_add);
        spinnerDances = findViewById(R.id.dance_spin_dances);

        student = SharedPrefManager.getInstance(this).getStudent();

        danceArrayList = new ArrayList<>();
        dances = new ArrayList<>();

        getDances();
        buttonAdd.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Call<JsonObject> addDanceCall = RetrofitClient.getInstance().getMyApi().addStudentDance(String.valueOf(student.getStudentId()),dance_id);
                addDanceCall.enqueue(new Callback<JsonObject>() {
                    @Override
                    public void onResponse(Call<JsonObject> call, Response<JsonObject> response) {

                        if (response.isSuccessful())
                        {
                            try
                            {
                                JSONObject object = new JSONObject(response.body().toString());
                                if (!object.getBoolean("error"))
                                {
                                    Toast.makeText(AddDanceActivity.this, object.getString("message"), Toast.LENGTH_SHORT).show();
                                    Intent homeIntent = new Intent(AddDanceActivity.this, HomeActivity.class);
                                    startActivity(homeIntent);
                                    finish();
                                }
                                else
                                {
                                    Toast.makeText(AddDanceActivity.this, object.getString("message"), Toast.LENGTH_SHORT).show();
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

                        Toast.makeText(AddDanceActivity.this, t.getMessage(), Toast.LENGTH_SHORT).show();

                    }
                });
            }
        });

        spinnerDances.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

                dance_id = String.valueOf(danceArrayList.get(position).danceId);

            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });

    }

    private void getDances()
    {
        Call<JsonArray> getDancesCall = RetrofitClient.getInstance().getMyApi().getDances();
        getDancesCall.enqueue(new Callback<JsonArray>() {
            @Override
            public void onResponse(Call<JsonArray> call, Response<JsonArray> response) {

                if (response.isSuccessful())
                {
                    try
                    {
                        JSONArray array = new JSONArray(response.body().toString());
                        for (int i=0;i<array.length();i++)
                        {
                            JSONObject danceObject = array.getJSONObject(i);
                            danceArrayList.add(new Dance(Integer.parseInt(danceObject.getString("dance_id")),danceObject.getString("dance_name")));

                            dances.add(danceObject.getString("dance_name"));
                        }
                        ArrayAdapter arrayAdapter = new ArrayAdapter(AddDanceActivity.this, android.R.layout.simple_spinner_item, dances);
                        arrayAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
                        spinnerDances.setAdapter(arrayAdapter);
                    }
                    catch (JSONException e)
                    {
                        e.printStackTrace();
                    }
                }
            }

            @Override
            public void onFailure(Call<JsonArray> call, Throwable t) {

                Toast.makeText(AddDanceActivity.this, t.getMessage(), Toast.LENGTH_SHORT).show();

            }
        });
    }
}