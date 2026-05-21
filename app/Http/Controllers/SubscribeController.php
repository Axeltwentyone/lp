<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeBeta;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['email' => 'required|email|max:255']);

        $email = strtolower(trim($request->email));

        if (Subscriber::where('email', $email)->exists()) {
            return back()->with('already', true);
        }

        $number = Subscriber::count() + 1;

        $subscriber = Subscriber::create([
            'email'  => $email,
            'number' => $number,
        ]);

        Mail::to($subscriber->email)->send(new WelcomeBeta($subscriber));

        return back()->with('success', $number);
    }
}
