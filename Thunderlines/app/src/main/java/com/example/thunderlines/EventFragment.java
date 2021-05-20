package com.example.thunderlines;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ProgressBar;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.List;

public class EventFragment extends Fragment {

    ViewGroup root;
    RecyclerView recyclerView;
    ProgressBar progressBar;

    List<Events> eventsList;

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup) inflater.inflate(R.layout.fragment_event, null);
        recyclerView = root.findViewById(R.id.recycler_event);
        progressBar = root.findViewById(R.id.progress_event);

        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new LinearLayoutManager(getContext()));
        eventsList = new ArrayList<>();

        eventsList = HomeActivity.eventsList;

        EventAdapterActivity adapter = new EventAdapterActivity(getContext(),eventsList);
        recyclerView.setAdapter(adapter);
        progressBar.setVisibility(View.GONE);

        return root;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        getActivity().setTitle("Events");

    }
}
