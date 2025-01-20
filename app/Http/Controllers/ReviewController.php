<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function sendEmail()
    {
        $data = [
            'name' => 'John Doe',
            'message' => 'Thank you for your feedback! We are working to improve our services.',
            'image_url' => url('img/atl.jpg'),
        ];

        Mail::to('ferpuwan@gmail.com')->send(new SendEmail($data));

        return response()->json(['message' => 'Email sent successfully!']);
    }
    public function index()
    {
        //
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
        //
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
