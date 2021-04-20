<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "personal_infos";

    protected $guarded = [];

    public function kinInfos(): BelongsToMany
    {
        return $this->belongsToMany(KinInfo::class, 'employee_kin_infos');
    }

    public function helbInfos(): BelongsToMany
    {
        return $this->belongsToMany(HelbInfo::class, 'employee_helb_infos');
    }
}
