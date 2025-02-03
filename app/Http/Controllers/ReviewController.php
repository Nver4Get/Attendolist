<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function sendEmail(Request $request)
    {
        $email = $request->query('email');

        Log::info('Email yang diterima: ' . $email);

        $user = User::whereRaw('LOWER(email) = ?', [strtolower($email)])->first();


        if ($user) {
            $data = [
                'name' => $user->name, // Ambil nama asli pengguna
            ];
    
            Mail::to($email)->send(new SendEmail($data));
    
            return redirect()->route('admin.reviews.index')->with('success',  'Email has been sent to ' . $email);
        }
    
        return redirect()->back()->with('error', 'User not found.');
    }
    public function index()
    {
        $reviews = Review::all();
        return view('admin.reviews.index', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        Review::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Thanks for your feedback!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
