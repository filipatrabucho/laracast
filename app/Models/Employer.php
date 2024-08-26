<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    use HasFactory;

    public function employer(){
        return $this->hasMany(Job::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
