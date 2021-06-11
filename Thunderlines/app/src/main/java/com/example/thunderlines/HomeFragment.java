package com.example.thunderlines;

import android.content.ActivityNotFoundException;
import android.content.Intent;
import android.media.MediaPlayer;
import android.net.Uri;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.VideoView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

public class HomeFragment  extends Fragment {

    ViewGroup root;
    TextView textViewIg1, textViewIg2, textViewFb, textViewYt;
    VideoView videoView;

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup) inflater.inflate(R.layout.fragment_home, null);

        textViewIg1 = root.findViewById(R.id.home_app_contact_ig1);
        textViewIg2 = root.findViewById(R.id.home_app_contact_ig2);
        textViewFb = root.findViewById(R.id.home_app_contact_fb);
        textViewYt = root.findViewById(R.id.home_app_contact_yt);
        videoView = root.findViewById(R.id.home_video_dance);

        videoView.setOnPreparedListener(new MediaPlayer.OnPreparedListener() {
            @Override
            public void onPrepared(MediaPlayer mp) {

                videoView.requestFocus();
                videoView.start();

            }
        });
        videoView.setVideoURI(Uri.parse("http://192.168.0.103/dance-academy/admin/videos/dance_promo.mp4"));

        textViewIg1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Uri igUri1 = Uri.parse("https://instagram.com/_u/thunderlines__clt");
                Intent thunderLinesIntent = new Intent(Intent.ACTION_VIEW, igUri1);

                thunderLinesIntent.setPackage("com.instagram.android");

                try
                {
                    startActivity(thunderLinesIntent);
                }
                catch (ActivityNotFoundException e)
                {
                    startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse("https://instagram.com/thunderlines__clt")));
                }
            }
        });

        textViewIg2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Uri igUri2 = Uri.parse("https://instagram.com/_u/tl_kids_dancers");
                Intent thunderLinesKidsIntent = new Intent(Intent.ACTION_VIEW, igUri2);

                thunderLinesKidsIntent.setPackage("com.instagram.android");

                try
                {
                    startActivity(thunderLinesKidsIntent);
                }
                catch (ActivityNotFoundException e)
                {
                    startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse("https://instagram.com/tl_kids_dancers")));
                }
            }
        });

        textViewFb.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Uri fbUri = Uri.parse("https://www.facebook.com/manzu.thedancer");
                Intent fbIntent = new Intent(Intent.ACTION_VIEW, fbUri);

                fbIntent.setPackage("com.facebook.katana");

                try
                {
                    startActivity(fbIntent);
                }
                catch (ActivityNotFoundException e)
                {
                    startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse("https://www.facebook.com/manzu.thedancer")));
                }
            }
        });

        textViewYt.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Uri ytUri = Uri.parse("https://www.youtube.com/c/THUNDERLINESDANCECOMPANY");
                Intent ytIntent = new Intent(Intent.ACTION_VIEW, ytUri);

                ytIntent.setPackage("com.google.android.youtube");

                try
                {
                    startActivity(ytIntent);
                }
                catch (ActivityNotFoundException e)
                {
                    startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse("https://www.youtube.com/c/THUNDERLINESDANCECOMPANY")));
                }
            }
        });

        return root;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        getActivity().setTitle("Home");



    }
}
