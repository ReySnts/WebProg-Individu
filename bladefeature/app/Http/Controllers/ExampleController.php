<?php
namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
class ExampleController extends Controller
{
    public function display()
    {
        return view('home');
    }
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }
    public function callback()
    {
        return $user = Socialite::driver('github')->user();
    }
}