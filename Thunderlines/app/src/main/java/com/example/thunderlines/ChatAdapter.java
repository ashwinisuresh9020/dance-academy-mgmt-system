package com.example.thunderlines;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import org.jetbrains.annotations.NotNull;

import java.util.List;

public class ChatAdapter extends RecyclerView.Adapter<ChatAdapter.ChatViewHolder> {

    private Context mCtx;
    private List<Chat> chatList;

    public ChatAdapter(Context mCtx, List<Chat> chatList) {
        this.mCtx = mCtx;
        this.chatList = chatList;
    }

    @NonNull
    @Override
    public ChatViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType)
    {
        LayoutInflater inflater = LayoutInflater.from(mCtx);
        View view = inflater.inflate(R.layout.layout_chat, null);

        return new ChatViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ChatViewHolder holder, int position)
    {
        Chat chat = chatList.get(position);

        holder.textViewSender.setText(String.format("%s :", chat.getSender()));
        holder.textViewMessage.setText(chat.getMessage());
    }

    @Override
    public int getItemCount()
    {
        return chatList.size();
    }

    class ChatViewHolder extends RecyclerView.ViewHolder
    {
        TextView textViewSender, textViewMessage;

        public ChatViewHolder(@NonNull @NotNull View itemView) {
            super(itemView);

            textViewSender = itemView.findViewById(R.id.textViewSender);
            textViewMessage = itemView.findViewById(R.id.textViewMessage);
        }
    }
}
