package com.example.thunderlines;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;

public class SharedPrefManager
{
    private static final String SHARED_PREF_NAME = "thunderlinessharedpref";
    private static final String KEY_USERNAME = "keyusername";
    private static final String KEY_USERGENDER = "keyusergender";
    private static final String KEY_USERDOB = "keyuserdob";
    private static final String KEY_USERADDRESS = "keyuseraddress";
    private static final String KEY_USERPLACE = "keyuserplace";
    private static final String KEY_USERDST = "keyuserdst";
    private static final String KEY_USERPIN = "keyuserpin";
    private static final String KEY_USERMOBILE = "keyusermobile";
    private static final String KEY_USEREMAIL = "keyuseremail";
    private static final String KEY_USERBRANCH = "keyuserbranch";
    private static final String KEY_USERID = "keyuserid";

    private static SharedPrefManager mInstance;
    private static Context mCtx;

    private SharedPrefManager(Context context)
    {
        mCtx = context;
    }

    public static synchronized SharedPrefManager getInstance(Context context)
    {
        if (mInstance == null)
        {
            mInstance = new SharedPrefManager(context);
        }

        return mInstance;
    }

    public void userLogin(Student student)
    {
        SharedPreferences sharedPreferences = mCtx.getSharedPreferences(SHARED_PREF_NAME,Context.MODE_PRIVATE);
        SharedPreferences.Editor editor = sharedPreferences.edit();
        editor.putInt(KEY_USERID, student.getStudentId());
        editor.putString(KEY_USERNAME, student.getStudentName());
        editor.putString(KEY_USERDOB, student.getStudentDob());
        editor.putString(KEY_USERADDRESS, student.getStudentAddress());
        editor.putString(KEY_USERGENDER, student.getStudentGender());
        editor.putString(KEY_USERBRANCH, student.getStudentBranch());
        editor.putString(KEY_USERPLACE, student.getStudentPlace());
        editor.putString(KEY_USERPIN, student.getStudentPinCode());
        editor.putString(KEY_USERDST, student.getStudentDistrict());
        editor.putString(KEY_USERMOBILE, student.getStudentMobile());
        editor.putString(KEY_USEREMAIL, student.getStudentEmail());
        editor.apply();
    }

    public boolean isLoggedIn()
    {
        SharedPreferences sharedPreferences = mCtx.getSharedPreferences(SHARED_PREF_NAME,Context.MODE_PRIVATE);
        return sharedPreferences.getString(KEY_USERNAME,null) != null;
    }

    public Student getStudent()
    {
        SharedPreferences sharedPreferences = mCtx.getSharedPreferences(SHARED_PREF_NAME,Context.MODE_PRIVATE);
        return new Student(
                sharedPreferences.getInt(KEY_USERID,-1),
                sharedPreferences.getString(KEY_USERNAME,null),
                sharedPreferences.getString(KEY_USERDOB,null),
                sharedPreferences.getString(KEY_USERGENDER,null),
                sharedPreferences.getString(KEY_USERADDRESS,null),
                sharedPreferences.getString(KEY_USERPLACE,null),
                sharedPreferences.getString(KEY_USERPIN,null),
                sharedPreferences.getString(KEY_USERDST,null),
                sharedPreferences.getString(KEY_USERMOBILE,null),
                sharedPreferences.getString(KEY_USEREMAIL,null),
                sharedPreferences.getString(KEY_USERBRANCH,null)
        );
    }

    public void logout()
    {
        SharedPreferences sharedPreferences = mCtx.getSharedPreferences(SHARED_PREF_NAME,Context.MODE_PRIVATE);
        SharedPreferences.Editor editor = sharedPreferences.edit();
        editor.clear();
        editor.apply();
	finishAffinity();
        mCtx.startActivity(new Intent(mCtx, LoginActivity.class));
    }
}
