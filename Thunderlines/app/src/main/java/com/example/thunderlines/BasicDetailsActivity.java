package com.example.thunderlines;

import androidx.appcompat.app.AppCompatActivity;

import android.app.DatePickerDialog;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.RadioGroup;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Locale;

public class BasicDetailsActivity extends AppCompatActivity {

    EditText editTextName, editTextDob, editTextEmail, editTextMobile, editTextPass, editTextConfirmPass;
    Button buttonNext;
    final Calendar myCalendar = Calendar.getInstance();
    RadioGroup radioGroupGender;
    String email_pattern = "[a-zA-Z0-9._-]+@[a-z]+\\\\.+[a-z]+";
    String gender;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_basic_details);

        editTextName = findViewById(R.id.basic_et_stud_name);
        editTextDob = findViewById(R.id.basic_et_stud_dob);
        editTextEmail = findViewById(R.id.basic_et_stud_mail);
        editTextMobile = findViewById(R.id.basic_et_stud_mobile);
        editTextPass = findViewById(R.id.basic_et_stud_pass);
        editTextConfirmPass = findViewById(R.id.basic_et_stud_confirm_pass);
        buttonNext = findViewById(R.id.basic_btn_next);
        radioGroupGender = findViewById(R.id.basic_radio_grp_gender);

        final DatePickerDialog.OnDateSetListener date = new DatePickerDialog.OnDateSetListener() {
            @Override
            public void onDateSet(DatePicker view, int year, int month, int dayOfMonth) {

                myCalendar.set(Calendar.YEAR, year);
                myCalendar.set(Calendar.MONTH, month);
                myCalendar.set(Calendar.DAY_OF_MONTH, dayOfMonth);
                String myFormat = "yyyy-MM-dd";
                SimpleDateFormat sdf = new SimpleDateFormat(myFormat, Locale.US);
                editTextDob.setText(sdf.format(myCalendar.getTime()));
            }
        };

        editTextDob.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                new DatePickerDialog(BasicDetailsActivity.this,date,myCalendar.get(Calendar.YEAR),myCalendar.get(Calendar.MONTH),myCalendar.get(Calendar.DAY_OF_MONTH)).show();

            }
        });

        buttonNext.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if (editTextName.getText().toString().isEmpty())
                {
                    editTextName.setError("Enter full name");
                    editTextName.requestFocus();
                }
                else if (editTextDob.getText().toString().isEmpty())
                {
                    editTextDob.setError("Enter Date of birth");
                    editTextDob.requestFocus();
                }
                else if (editTextEmail.getText().toString().isEmpty())
                {
                    editTextEmail.setError("Enter Email address");
                    editTextEmail.requestFocus();
                }
                else if (editTextMobile.getText().toString().isEmpty())
                {
                    editTextMobile.setError("Enter Mobile number");
                    editTextMobile.requestFocus();
                }
                else if (editTextMobile.getText().toString().length()<10)
                {
                    editTextMobile.setError("Enter Mobile number in 10 digits");
                    editTextMobile.requestFocus();
                }
                else if (editTextPass.getText().toString().isEmpty())
                {
                    editTextPass.setError("Enter Password");
                    editTextPass.requestFocus();
                }
                else if (editTextConfirmPass.getText().toString().isEmpty())
                {
                    editTextConfirmPass.setError("Enter Password again");
                    editTextConfirmPass.requestFocus();
                }
                else if (!editTextConfirmPass.getText().toString().equals(editTextPass.getText().toString()))
                {
                    editTextConfirmPass.setError("Enter same password");
                    editTextConfirmPass.requestFocus();
                }
                else
                {
                    if (radioGroupGender.getCheckedRadioButtonId()==R.id.basic_radio_male)
                    {
                        gender = "Male";
                    }
                    if (radioGroupGender.getCheckedRadioButtonId()==R.id.basic_radio_female)
                    {
                        gender = "Female";
                    }
                    Intent addressIntent = new Intent(BasicDetailsActivity.this, AddAddressActivity.class);
                    addressIntent.putExtra("stud_name", editTextName.getText().toString());
                    addressIntent.putExtra("stud_dob", editTextDob.getText().toString());
                    addressIntent.putExtra("stud_mail", editTextEmail.getText().toString());
                    addressIntent.putExtra("stud_mob", editTextMobile.getText().toString());
                    addressIntent.putExtra("stud_pass", editTextConfirmPass.getText().toString());
                    addressIntent.putExtra("stud_gender", gender);
                    startActivity(addressIntent);
                    finish();
                }
            }
        });

    }
}