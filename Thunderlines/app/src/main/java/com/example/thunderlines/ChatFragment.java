package com.example.thunderlines;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentTransaction;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.google.gson.JsonObject;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;
import java.util.Objects;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class ChatFragment extends Fragment {


    ViewGroup root;
    RecyclerView recyclerView;
    List<Chat> chatList;
    EditText editTextMessage;
    Button buttonSendMessage;
    Student student;

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup) inflater.inflate(R.layout.fragment_chat, null);
        recyclerView = root.findViewById(R.id.recycler_chat);
        buttonSendMessage = root.findViewById(R.id.buttonSendMessage);
        editTextMessage = root.findViewById(R.id.editTextMessage);

        student = SharedPrefManager.getInstance(getContext()).getStudent();

        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new LinearLayoutManager(getContext()));
        chatList = new ArrayList<>();


        buttonSendMessage.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if (editTextMessage.getText().toString().isEmpty())
                {
                    editTextMessage.setError("Please enter message");
                    editTextMessage.requestFocus();
                }
                else
                {
                    Call<JsonObject> sendMessageCall = RetrofitClient.getInstance().getMyApi().sendMessage(String.valueOf(student.getStudentId()),editTextMessage.getText().toString());
                    sendMessageCall.enqueue(new Callback<JsonObject>() {
                        @Override
                        public void onResponse(Call<JsonObject> call, Response<JsonObject> response) {

                            if (response.isSuccessful())
                            {
                                try
                                {
                                    JSONObject object = new JSONObject(response.body().toString());
                                    if (!object.getBoolean("error"))
                                    {
                                        Toast.makeText(getActivity(),object.getString("message"), Toast.LENGTH_SHORT).show();
                                        editTextMessage.getText().clear();

                                        getActivity().recreate();
                                        FragmentTransaction ft = getActivity().getSupportFragmentManager().beginTransaction();
                                        ft.replace(R.id.content_frame, new ChatFragment());
                                        ft.commit();

                                    }
                                    else
                                    {
                                        Toast.makeText(getActivity(),object.getString("message"), Toast.LENGTH_SHORT).show();
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

                            Toast.makeText(getActivity(), t.getMessage(), Toast.LENGTH_SHORT).show();

                        }
                    });
                }
            }
        });

        chatList = HomeActivity.chatList;

        ChatAdapter adapter = new ChatAdapter(getContext(),chatList);
        recyclerView.setAdapter(adapter);

        return root;
    }


    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        getActivity().setTitle("Chat");

    }
}
