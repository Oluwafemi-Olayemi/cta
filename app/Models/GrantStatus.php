<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GrantStatus extends Model
{
    use HasFactory;

    protected $table = 'grantstatuses';

    public function conferences(): BelongsTo
    {
        return $this->belongTo(Conference::class);
    }


}
