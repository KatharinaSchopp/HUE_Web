<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = [
         'date', 'maxCapacity', 'startTimeslot', 'endTimeslot',
        'vaclocation_id'
    ];

    public function vaclocation() : BelongsTo {
        return $this->belongsTo(Vaclocation::class);
    }

    public function user() : HasMany {
        return $this->hasMany(User::class);
    }
}
