<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AuthData;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function facebook()
{
    return Socialite::with('facebook')->redirect();
}

public function callback()
{
    $user = Socialite::driver('facebook')->user();

    $email = $user ->getEmail();
        $status = false;

        $InterUser = User::where('email', $email)->first();

        $objAuth = new AuthData();
        $check = $objAuth->where('user_id', $InterUser->id)->where('network', 'Facebook')->first();

        if ($check){

            $check->nickname = $user-> getNickname();
            $check->name     = $user-> getName();
            $check->avatar   = $user-> getAvatar();
            $status = $check->save();

        }else{
            $status = (bool)$objAuth->create([

                'user_id' => $InterUser->id,
                'network' => 'Facebook',
                'nickname' => $user-> getNickname(),
                'name' => $user-> getName(),
                'avatar' => $user-> getAvatar()

            ]);

        if ($status){

            \Auth::login($InterUser);
                return redirect()->route('home');
        }
     dd($user);
           }
}
