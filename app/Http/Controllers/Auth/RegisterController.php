<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Setting;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';
    
    public function showRegistrationForm(){
        $website_data = Setting::find(1);
        
        return view('auth.register', compact('website_data'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:10'],
            'whatsapp' => ['required', 'string', 'min:10'],
            'telegram' => ['required', 'string', 'min:10'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        // $website_data = Setting::find(1);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'whatsapp' => $data['whatsapp'],
            'telegram' => $data['telegram'],
            'password' => Hash::make($data['password']),
        ]);
        return $user;
    }
}
