package com.example.thunderlines;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import org.jetbrains.annotations.NotNull;

import java.io.IOException;
import java.net.URL;
import java.util.List;

public class EventAdapterActivity extends RecyclerView.Adapter<EventAdapterActivity.EventViewHolder> {

    private Context mCtx;

    private List<Events> eventsList;

    public EventAdapterActivity(Context mCtx, List<Events> eventsList) {
        this.mCtx = mCtx;
        this.eventsList = eventsList;
    }

    @NonNull
    @Override
    public EventViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType)
    {
        LayoutInflater inflater = LayoutInflater.from(mCtx);
        View view = inflater.inflate(R.layout.layout_events, null);

        return new EventViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull EventViewHolder holder, int position)
    {
        Events event  = eventsList.get(position);

        holder.textViewEventName.setText(event.getEventName());
        holder.textViewEventDesc.setText(event.getEventDescription());
        holder.textViewEventDate.setText(event.getEventDate());
        String image_location = "http://192.168.0.103/dance-academy/admin/" + event.getEventImage();
        try {
            URL url = new URL(image_location);
            Bitmap bmp = BitmapFactory.decodeStream(url.openConnection().getInputStream());
            holder.imageViewPoster.setImageBitmap(bmp);
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @Override
    public int getItemCount()
    {
        return eventsList.size();
    }

    class EventViewHolder extends RecyclerView.ViewHolder
    {
        ImageView imageViewPoster;
        TextView textViewEventName, textViewEventDesc, textViewEventDate;

        public EventViewHolder(@NonNull View itemView) {
            super(itemView);

            imageViewPoster = itemView.findViewById(R.id.imageViewPoster);
            textViewEventName = itemView.findViewById(R.id.textViewEventName);
            textViewEventDesc = itemView.findViewById(R.id.textViewEventDesc);
            textViewEventDate = itemView.findViewById(R.id.textViewEventDate);
        }
    }
}
