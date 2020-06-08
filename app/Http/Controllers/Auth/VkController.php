<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AuthData;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class VkController extends Controller
{
    public function login()
    {
        return Socialite::with('vkontakte')->redirect();
    }

    
    public function response()
    {
        $user = Socialite::driver('vkontakte')->user();

        $email = $user ->getEmail();
        $status = false;

        $InterUser = User::where('email', $email)->first();

        $objAuth = new AuthData();
        $check = $objAuth->where('user_id', $InterUser->id)->where('network', 'vk')->first();

        if ($check){

            $check->nickname = $user-> getNickname();
            $check->name     = $user-> getName();
            $check->avatar   = $user-> getAvatar();
            $status = $check->save();

        }else{
            $status = (bool)$objAuth->create([

                'user_id' => $InterUser->id,
                'network' => 'vk',
                'nickname' => $user-> getNickname(),
                'name' => $user-> getName(),
                'avatar' => $user-> getAvatar()

            ]);

        if ($status){

            \Auth::login($InterUser);
                return redirect()->route('home');
        }
        }
    }
}
