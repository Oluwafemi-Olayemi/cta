<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
