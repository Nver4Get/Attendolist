<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RegisterServices;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $registerServices;
    public function __construct(RegisterServices $registerServices)
    {
        $this->registerServices = $registerServices;
    }

    public function index()
    {

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
        $validatedData = $request->validate([
            'name' => 'required|max:255|',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|max:255|unique:users',
            "password" => 'required'
        ]);
        $data = $request->all();
        $data['type'] = 0;
        $this->registerServices->registerUser($data);
        return redirect()->route('landingpage')->with('success', 'Registration successful!, please login first');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
