<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\FacebookLoginService;


class FacebookLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback(FacebookLoginService $service)
    {
     	$FacebookUser = \Socialite::driver('facebook')->user();
        
        if($FacebookUser)
        {
            $picture=$FacebookUser->getAvatar(); 
            $name=$FacebookUser->getName(); 

            session([
                'user_picture' => $picture,
                'user_name' => $name ,
            ]);      

            $user = $service->createOrGetUser($FacebookUser);
            auth()->login($user);       
            return redirect()->to('/admin');     
        }
     
     
            

    }
    



    public function demo()
    {
    	$providerUser = \Socialite::driver('facebook')->user();
        return $providerUser;
        // $picture=$providerUser->getAvatar(); 
        // $email=$providerUser->getEmail(); 

        // session([
        // 	'user_picture' => 'picture',
        // 	'user_email' => 'email',
        // 	]);
        // return session('user_email');
    	
    }
}
