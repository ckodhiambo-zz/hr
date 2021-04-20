<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Onboarded extends Model
{
    use HasFactory;

    protected $table = 'onboarded';

    protected $guarded = [];

    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
