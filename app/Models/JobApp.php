<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApp extends Model
{
    use HasFactory;
    protected $table = 'jopApps';

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
