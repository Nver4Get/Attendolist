<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('dashboard', [
            'activities' => $activities,
        ]);
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
            'attendance' => 'required|boolean',
            'tasks' => 'nullable|array',
            'tasks.*' => 'string|max:255',
        ]);

        $tasks = $request->input('tasks', []);
        $totalTasks = 10;
        $filledTasks = count($tasks);
        if ($request->input('attendance')) {
            $progress = ($filledTasks / $totalTasks) * 100;
            $symbol = '<i class="fa-solid fa-square-check"></i>';
        } else {
            $progress = '-';
            $symbol = '<i class="fa-solid fa-rectangle-xmark"></i>';
        }

        $activity = new Activity();
        $activity->attendance = $request->input('attendance');
        $activity->tasks = json_encode($tasks);
        $activity->progress = $progress;
        $activity->symbol = $symbol;
        $activity->save();

        return redirect()->route('dashboard')->with('success', 'Activity saved successfully!');
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
        $request->validate([
            'attendance' => 'required|boolean',
            'tasks' => 'nullable|array',
            'tasks.*' => 'string|max:255',
        ]);

        $tasks = $request->input('tasks', []);
        $totalTasks = 10;
        $filledTasks = count($tasks);
        $progress = ($filledTasks / $totalTasks) * 100;

        $activity = Activity::findOrFail($id);
        $activity->tasks = json_encode($tasks);
        $activity->progress = $progress;
        $activity->save();

        return redirect()->route('dashboard')->with('success', 'Activity updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('dashboard')->with('success', 'Activity deleted successfully!');
    }
}
