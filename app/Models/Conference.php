<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Conference extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('grantstatus_id');
    }

    public function grantstatus(): HasOne
    {
        return $this->hasOne(GrantStatus::class);
    }
}
