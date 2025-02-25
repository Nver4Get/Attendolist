<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['attendance', 'reason', 'proof'];
    protected $primaryKey = 'activity_id';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->week_number = now()->weekOfYear; // Set nomor minggu saat aktivitas dibuat
        });
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'activity_id', 'activity_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
