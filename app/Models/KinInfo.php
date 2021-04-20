<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class KinInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "kin_infos";

    protected $guarded = [];

    public function personalInfos(): BelongsToMany
    {
        return $this->belongsToMany(PersonalInfo::class, 'employee_kin_infos');
    }
}
