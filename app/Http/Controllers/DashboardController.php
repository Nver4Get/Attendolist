<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\View\Components\Task;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        $activities = Activity::whereDate('created_at', $today)->get();
        

        return view('dashboard', compact('activities', 'today'));
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
        //dd($request->all());
        // Validasi data yang diterima
        $request->validate([
            'attendance' => 'required|boolean',
            'tasks.*' => 'nullable|string', // Validasi untuk setiap task
            'reason' => 'nullable|string',
            'proof' => 'nullable|file|mimes:jpg,png,pdf', // Validasi file
        ]);

        // Simpan data ke dalam database
        $attendance = new Activity();
        $attendance->attendance = $request->attendance;

        // Jika hadir, simpan tugas
        if ($request->attendance == 1) {
            // Menyimpan tugas sebagai string tunggal jika hanya satu tugas
            $attendance->tasks = is_array($request->tasks) ? implode(', ', $request->tasks) : $request->tasks;

            $taskCount = is_array($request->tasks) ? count($request->tasks) : 1;
            // $attendance->progress = $taskCount > 1 ? 100.00 * $taskCount / $taskCount : 100;
        } else { // Jika tidak hadir, simpan alasan dan proof
            $attendance->reason = $request->reason;
            if ($request->hasFile('proof')) {
                $proofPath = $request->file('proof')->store('proofs', 'public'); // Simpan file bukti
                $attendance->proof = $proofPath;
            }
            $attendance->progress = 0;
        }

        // Simpan data ke dalam database
        $attendance->save();

        // Redirect atau return response
        return redirect()->back()->with('success', 'Attendance recorded successfully!');
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
