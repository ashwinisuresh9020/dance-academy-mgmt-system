package com.example.thunderlines;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

public class ProfileFragment extends Fragment {

    ViewGroup root;
    Button buttonAdd, buttonEdit, buttonChange;
    Student student;
    TextView textViewName, textViewAddress, textViewMobile, textViewEmail, textViewDob;

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup) inflater.inflate(R.layout.fragment_profile, null);
        buttonAdd = root.findViewById(R.id.btn_add_dance);
        buttonEdit = root.findViewById(R.id.btn_edit_profile);
        buttonChange = root.findViewById(R.id.btn_change_pass);
        textViewName = root.findViewById(R.id.profile_text_name);
        textViewEmail = root.findViewById(R.id.profile_text_mail);
        textViewDob = root.findViewById(R.id.profile_text_dob);
        textViewAddress = root.findViewById(R.id.profile_text_address);
        textViewMobile = root.findViewById(R.id.profile_text_mobile);

        student = SharedPrefManager.getInstance(getActivity()).getStudent();

        textViewName.setText(student.getStudentName());
        textViewEmail.setText(student.getStudentEmail());
        textViewDob.setText(String.format("     %s",student.getStudentDob()));
        textViewAddress.setText(String.format("     %s\n     %s\n     %s\n     %s",student.getStudentAddress(),student.getStudentPlace(),student.getStudentPinCode(),student.getStudentDistrict()));
        textViewMobile.setText(String.format("     %s", student.getStudentMobile()));

        buttonAdd.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent danceIntent = new Intent(getContext(),AddDanceActivity.class);
                startActivity(danceIntent);

            }
        });

        buttonEdit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent editIntent = new Intent(getContext(), EditProfileActivity.class);
                startActivity(editIntent);
                getActivity().finish();

            }
        });

        buttonChange.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent changeIntent = new Intent(getContext(),ChangePasswordActivity.class);
                startActivity(changeIntent);

            }
        });

        return root;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        getActivity().setTitle("Profile");

    }
}
