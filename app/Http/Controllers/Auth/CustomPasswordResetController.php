<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tzsk\Otp\Facades\Otp;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;
use App\Models\User;

class CustomPasswordResetController extends Controller
{
    public function show(){
        return view('auth.password-reset');
    }
    public function send(Request $request){
        $email = $request->email;
        $otp = Otp::generate('201081');
        Session::put('otp',$otp);
        DB::table('password_resets')->insert([
            'email' => $email,
            'otp' => $otp,
            'created_at' => now(),
        ]);
        Mail::to($request->email)->send(new ResetPasswordMail());
        Session::forget('otp');
        return view('auth.passwordUpdate',compact('email'));
    }
    public function resetPassword(Request $request){
        $valid = Otp::match($request->otp, '201081');
        if($valid){
            $user = User::where('email',$request->email)->first();
            $user->password = bcrypt($request->password);
            $user->save();
            DB::table('password_resets')->truncate();
            return redirect('user/login')->with('message','Password updates sucessfully');
         }else{
            return redirect('user/login')->with('message','Your OTP is incorrect');
         }
    }
}