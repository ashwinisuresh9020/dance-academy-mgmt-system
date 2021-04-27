package com.example.thunderlines;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

import com.google.gson.JsonObject;

import org.json.JSONException;
import org.json.JSONObject;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class FeeDuesFragment extends Fragment {

    ViewGroup root;
    TextView textViewFeeDues, textViewNoDues;
    Student student;

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup) inflater.inflate(R.layout.fragment_fee_dues,null);

        textViewFeeDues = root.findViewById(R.id.text_fee_dues);
        textViewNoDues = root.findViewById(R.id.text_no_fee_dues);

        return root;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        getActivity().setTitle("Fee Dues");
        student = SharedPrefManager.getInstance(getActivity()).getStudent();

        Call<JsonObject> getFeeDuesCall = RetrofitClient.getInstance().getMyApi().getFeeDues(String.valueOf(student.getStudentId()));
        getFeeDuesCall.enqueue(new Callback<JsonObject>() {
            @Override
            public void onResponse(Call<JsonObject> call, Response<JsonObject> response) {

                if (response.isSuccessful())
                {
                    try
                    {
                        JSONObject jsonObject = new JSONObject(response.body().toString());
                        if (!jsonObject.getBoolean("error"))
                        {
                            textViewFeeDues.setText(jsonObject.getString("message"));
                            textViewFeeDues.setVisibility(View.VISIBLE);
                            textViewNoDues.setVisibility(View.GONE);
                        }
                        else
                        {
                            textViewNoDues.setText(jsonObject.getString("message"));
                            textViewNoDues.setVisibility(View.VISIBLE);
                            textViewFeeDues.setVisibility(View.GONE);
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
                

            }
        });

    }
}
