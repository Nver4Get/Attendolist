<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        $activities = Activity::with('tasks')->get();

        $todayActivity = $activities->firstWhere('created_at', $today->toDateString());

        return view('dashboard', compact('today', 'activities', 'todayActivity'));
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
        // Validasi data yang diterima
        $request->validate([
            'attendance' => 'required|boolean',
            'tasks.*' => 'nullable|string', // Validasi setiap tugas
            'reason' => 'nullable|string',
            'proof' => 'nullable|file|mimes:jpg,png,pdf',
        ]);

        // Simpan data ke dalam tabel activities
        $activity = new Activity();
        $activity->attendance = $request->attendance;
        $activity->user_id = auth()->id();


        if ($request->attendance == 1) {
            // Jika hadir, simpan tugas
            $activity->reason = null;
            $activity->proof = null;
        } else {
            // Jika tidak hadir, simpan alasan dan bukti
            $activity->reason = $request->reason;

            if ($request->hasFile('proof')) {
                $proofPath = $request->file('proof')->store('proofs', 'public');
                $activity->proof = $proofPath;
            }
        }

        $activity->save();

        if ($request->attendance == 1 && is_array($request->tasks)) {
            foreach ($request->tasks as $task) {
                Task::create([
                    'activity_id' => $activity->activity_id,
                    'task' => $task,
                    'progress' => 0,
                ]);
            }
        }

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
    public function update(Request $request, $activity_id)
    {
        $activity = Activity::findOrFail($activity_id);

        // Hapus task yang ditandai untuk dihapus
        $deletedTaskIds = $request->input('deleted_tasks', []);
        if (!empty($deletedTaskIds)) {
            Task::whereIn('id', $deletedTaskIds)->delete();
        }

        // Update atau tambahkan task baru
        $tasks = $request->input('tasks', []);
        $progress = $request->input('progress', []);

        foreach ($tasks as $index => $taskName) {
            $taskProgress = $progress[$index] ?? null;

            // Perbarui task yang sudah ada atau tambahkan yang baru
            if (isset($activity->tasks[$index])) {
                $task = $activity->tasks[$index];
                $task->update(['task' => $taskName, 'progress' => $taskProgress]);
            } else {
                $activity->tasks()->create(['task' => $taskName, 'progress' => $taskProgress]);
            }
        }

        return redirect()->route('dashboard.index')->with('success', 'Activity updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        try {
            $task->delete();

            return response()->json(['success' => true, 'message' => 'Task deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete task.']);
        }
    }
}
