<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vaclocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'zip', 'city', 'address',
    ];

    public function vaccination() : HasMany {
        return $this->hasMany(Vaclocation::class);
    }
}
