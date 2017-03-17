<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\GoogleLoginService;

class GoogleLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();   
    }   

    public function callback(GoogleLoginService $service)
    {
        $GoogleUser = Socialite::driver('google')->user();
        if($GoogleUser)
        {
            $picture=$GoogleUser->getAvatar(); 
            $name=$GoogleUser->getName(); 

            session([
                'user_picture' => $picture,
                'user_name' => $name ,
            ]);      

            $user = $service->createOrGetUser($GoogleUser);
            auth()->login($user);       
            return redirect()->to('/admin');     
        }
     
        
            

    }
}
